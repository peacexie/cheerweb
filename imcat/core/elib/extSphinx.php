<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

include DIR_STATIC.'/ximp/class/sphinxapi.cls_php'; 

// Sphinx搜索类
class extSphinx {
    
    public $so = NULL;
    public $cfgs = array();
    public $idxs = array();
    public $res = array();
    public $opt = array();

    public function __construct() {
        $this->_init();
    }
    
    // $rs=$dop->getRecs() 通用mod全文搜索
    function getRecs($mod='', $opt=array(), $filts=array()){
        global $_cbase;
        $groups = glbConfig::read('groups'); $mcfg = glbConfig::read($mod); 
        $sfid = basReq::val('sfid','','Key'); 
        $sfkw = basReq::val('sfkw'); $keywd = basReq::val('keywd'); 
        $sfkw = empty($sfkw) ? $keywd : $sfkw;
        $qstr = empty($sfkw) ? '' : (empty($sfid) ? '' : "@$sfid ")."$sfkw";
        $fields = array();
        $stype = basReq::val('stype','','Key');
        if($stype){
            $mpid = $mcfg['pid'];
            if(in_array($mpid,array('docs','advs'))){ 
                $fields['catid'] = basSql::whrTree($mcfg['i'],'(crc32)',$stype);
            }elseif(in_array($mpid,array('users','xxxxx'))){
                $fields['grade'] = crc32($stype);
            }elseif(in_array($mpid,array('coms','xxxxx'))){
                //$fields['stype'] = $stype;
            }
        }
        foreach ($groups as $key => $row) {
            $kval = basReq::val($key,'','Key');
            if(!empty($stype) && isset($mcfg['f'][$key])){
                $kcfg = glbConfig::read($key);
                $fields[$key] = basSql::whrTree($kcfg['i'],'(crc32)',$kval);
            }
        }
        if(!empty($filts)) $fields = array_merge($fields,$filts);
        $page = basReq::val('page',1,'N'); 
        if(empty($opt['limit'])) $opt['limit'] = $_cbase['show']['apsize'];
        if(empty($opt['offset'])) $opt['offset'] = ($page-1)*$opt['limit']; 
        if(empty($opt['ordby'])) $opt['ordby'] = '@id desc';
        $this->opt = $opt; 
        $this->search($qstr, $mod, $fields, $opt);
        $idstr = $this->idstr(); 
        if(!empty($idstr)){
            return glbDBObj::dbObj()->table(glbDBExt::getTable($mod))->where("spid IN($idstr)")->select();
        }else{
            return array();
        }
    }
    // $dop->pgbar($idfirst,$idend);
    public function pgbar($idfirst,$idend) {
        $pg = new comPager('$sfrom','$where',$this->opt['limit'],'$order'); 
        $pg->prec = $this->res['total']; 
        $pg->bar = $pg->links();
        $pgs = $pg->show($idfirst,$idend);
        if($idfirst=='rebar') return $pgs;
        $op = "".basElm::setOption(basLang::show('flow.op_op3'),'',basLang::show('flow.op0_bacth'));
        dopFunc::pageBar($pgs,$op);
    }

    // init
    public function _init() {
        //spcfgs
        $spcfgs = glbConfig::read('sphinx','ex');
        $this->cfgs = $spcfgs['cfgs'];
        $this->idxs = $spcfgs['index'];
        //初始化sphinx
        $this->so = new \SphinxClient(); 
        $this->so->SetServer($this->cfgs['host'], $this->cfgs['port']); 
        $this->so->SetConnectTimeout(3);
        $this->so->SetArrayResult(true);
        $this->so->SetMatchMode(SPH_MATCH_EXTENDED2); //匹配模式
        $this->so->SetRankingMode(SPH_RANK_PROXIMITY_BM25); //仅使用BM25评分计算
        //$res = $this->so->query('@title 人','index_imcat_demo_main,index_imcat_demo_delta'); 
        //if(!empty($res['_error'])) die($res['_error']);
    }

    /**
     * 搜索
     * @param string $qstr        关键词        类似sql like'%$q%'
     * @param string $spmod        sp_model    ex_sphinx.php里面设置
     * @param array $fields        字段过滤      show=>1, show=>array(1), tagid=>array(1,2,3), atime=>array('min'=>123,'max'=>456)
     * @param array $opt         选项        $offset=0, $limit=10, $ordby='@id desc'
     */
    public function search($qstr, $spmod='', $fields=array(), $opt=array()) {
        $spidx = empty($this->idxs[$spmod]) ? $spmod : $this->idxs[$spmod];
        // 字段过滤
        if(!empty($fields)) {
            foreach($fields as $fid=>$arr){
                if(is_array($arr) && isset($arr['min']) && isset($arr['max'])){
                    $this->so->SetFilterRange($fid, $arr['min'] , $arr['max'], false);
                }else{
                    $this->so->SetFilter($fid, is_array($arr) ? $arr : array($arr));
                }
            } 
        }
        // opt
        $offset = isset($opt['offset']) ? $opt['offset'] : 0;
        $limit = isset($opt['limit']) ? $opt['limit'] : 0;
        $ordby = isset($opt['ordby']) ? $opt['ordby'] : '@id desc'; 
        $limit = intval($limit);
        if($limit) { 
            $this->so->SetLimits(intval($offset), $limit, ($limit>1200) ? $limit : 1200);
        } //$qstr = "you";
        if($ordby) { //排列
            $this->so->SetSortMode(SPH_SORT_EXTENDED, $ordby); 
        } 
        // res 
        $this->res = $this->so->query($qstr, $spidx); 
        return $this->res;
    }
    
    public function idstr(){
        if(empty($this->res['matches'])) return '0';
        $ids = '';
        foreach ($this->res['matches'] as $row) {
            $ids .= (empty($ids) ? '' : ',')."{$row['id']}";
        }
        return $ids; // implode(',', array_keys($this->res['matches']));
    }

}

/*

这里解释一下：
$sphinx->setFilter(‘tagid’, array(2,3,4));
是表示含有标签值2,3,4中的任意一个即符合筛选，这里是or关系。

$sphinx->setFilter(‘tagid’, array(2));
$sphinx->setFilter(‘tagid’, array(3));
$sphinx->setFilter(‘tagid’, array(4));
设置三个filter是标示，要同时满足2,3,4三个属性值才符合，这里是and关系。


// 设置扩展匹配模式 http://blog.csdn.net/u013699800/article/details/48316841
$sphinx->SetMatchMode ( "SPH_MATCH_EXTENDED2" );
//查询中使用条件语句，字段用@开头，搜索内容包含测试，toid等于1的邮件：
$result = $sphinx->query('@content (测试) & @toid =1', '*');
//用括号和&（与）、|、（或者）、-（非，即!=）设置更复杂的条件
$result = $sphinx->query('(@content (测试) & @subject =呃) | (@fromid -(100))', '*');
//更多语法请查看官方文档匹配模式的说明

https://www.cnblogs.com/redleaf1995/p/3831522.html
http://sphinxsearch.com/docs/current.html#extended-syntax
@title hello @body world
@(title,body) hello world


*/
