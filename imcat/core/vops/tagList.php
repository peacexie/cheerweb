<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

/*

*/
// 标签解析 (数据列表)类
class tagList extends tagBase{
    
    //public $whrArr = array();
    
    function __construct($paras=array()) {
        parent::__construct($paras); 
        $this->pOrder();
        $this->pLimit();
        $this->pOffset();
        $this->pStype();
        $this->pKeywd();
        $this->pField();
        $this->pPid();
        $this->inIds();
        $this->pWhere();
    }
    
    function pPid(){ 
        $cfg = $this->p1Cfg('pid'); 
        if(empty($cfg[1])) return;
        $_groups = glbConfig::read('groups'); 
        $pmod = @$_groups[$this->modid]['pmod'];
        if(!$pmod) return;
        $cfg[1] = basStr::filKey($cfg[1],'-.@');
        $this->whrArr[] = "m.pid='{$cfg[1]}'";
    }
    function inIds(){ 
        $cfg = $this->p1Cfg('inids'); 
        if(empty($cfg[1])) return;
        $a = array_filter(explode(',',$cfg[1]));
        $s = implode("','",$a);
        if($s){
            $this->whrArr[] = "m.{$this->fpk} IN('$s')";
        }
    }
    
    function pOffset(){
        $cfg = $this->p1Cfg('offset'); 
        $offset = empty($cfg[1]) ? 0 : intval($cfg[1]);
        $this->sqlArr['offset'] = $offset;
    }

    function pLimit(){
        global $_cbase; 
        $cfg = $this->p1Cfg('limit'); 
        $limit = empty($cfg[1]) ? 0 : intval($cfg[1]);
        if($limit<1) $limit = intval($_cbase['show']['fpsize']);
        if($limit<1) $limit = 10;
        $this->sqlArr['limit'] = $limit;
    }

    function pKeywd(){ 
        $cfg = $this->p1Cfg('keywd');
        $sql = ''; 
        if(!empty($cfg)){
            $fix = empty($cfg[1]) ? basReq::val('keywd') : $cfg[1]; 
            $fields = @$cfg[2];
            $_groups = glbConfig::read('groups'); 
            if($fix && $fields){
                $flist = $this->mcfg['f'];
                $fa = explode('+',$fields);
                $sql = '';
                foreach($fa as $f){ 
                    if(isset($flist[$f]) && empty($flist[$f]['etab'])){ 
                        $sql .= " OR m.$f ".basSql::fmtKeyWD($fix)."";    
                    }
                }
                $sql && $sql = "(".substr($sql,4).")";
            }elseif($fix){
                $pid = $_groups[$this->modid]['pid'];    
                if(in_array($pid,array('docs','advs'))){
                    $def = 'title';
                }elseif(in_array($pid,array('users'))){
                    $def = 'mname';
                }else{ //交互等,无keywd
                    $def = '';
                }
                $def && $sql = "m.$def ".basSql::fmtKeyWD($fix)."";
            }
            $sql && $this->whrArr[] = $sql;

        }
    }
    
    //  //val=id1+id2+  -=>  IN ('libk', 'zyfon', 'daodao');
    function pField(){ 
        $flist = $this->mcfg['f'];
        $exFields = array_merge($this->exFld1,$this->exFld2); 
        foreach($this->paras as $para){ 
            $sql = '';
            if(isset($flist[$para[0]]) || in_array($para[0],$exFields)){
                $f = $para[0];
                $v = isset($para[1]) ? $para[1] : basReq::val($f); 
                $op = @$para[2]; 
                if(strlen($v)>0){ // 0可以通过
                    if(in_array($op,array('>','>=','<','<='))){ 
                        $sql = "(m.$f $op '$v')";
                    }elseif($op=='in'){
                        $v = str_replace("'","",$v);
                        $v = str_replace('+',"','","'$v'");
                        $sql = "m.$f IN($v)";    
                    //}elseif($op=='fset'){ // fset FIND_IN_SET(goods_id, '{$ids}')"
                    }elseif($op=='like'){
                        $sql = "m.$f ".basSql::fmtKeyWD($v)."";    
                    }else{
                        $sql = "(m.$f='$v')";    
                    }
                }
            }
            $sql && $this->whrArr[] = $sql;
        }
    }
    
    function getData(){ 
        $sfrom = "m.* FROM ".glbDBObj::dbObj()->table($this->sqlArr['tabid'],2)." m ";
        $where = empty($this->whrStr) ? '' : "WHERE ".$this->whrStr;
        $offset = empty($this->sqlArr['offset']) ? '' : $this->sqlArr['offset'].','; 
        $this->sqlAll = "SELECT $sfrom $where ORDER BY ".$this->sqlArr['ofull']." LIMIT $offset".$this->sqlArr['limit']; 
        $re = $this->re = $this->db->query($this->sqlAll); 
        return $this->getJoin($re);
            
    }

}
