<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

// dopAdvs(data OP for Advs)
class dopAdvs extends dopBase{    

    public $kfix = 'yyyy-md-';
    public $ktmp = '31';
    //public $tbuacc = '';
    public $_kid = 'aid';
    public $_kno = 'ano';    

    //function __destory(){  }
    function __construct($cfg){ 
        $mod = $cfg['kid'];
        parent::__construct($cfg,$cfg['pid']."_$mod");
        $this->typfid = $this->so->typfid = 'catid';
        $this->dskey  = $this->so->dskey  = 'title'; 
        $this->order  = $this->so->order  = basReq::val('order','atime');
        //$this->tbuacc  = 'users_uacc';
    }
    // 翻页条,批量操作
    function pgbar($idfirst,$idend){
        $pg = $this->pg->show($idfirst,$idend);
        $op = "".basElm::setOption("show|".basLang::show('flow.op_show')."\ndel|".basLang::show('flow.op_del')."\nhidden|".basLang::show('flow.op_hide')."",'',basLang::show('flow.op0_bacth'));
        dopFunc::pageBar($pg,$op);
    }
    // 搜索条 // check,fields
    function sobar($msg='',$width=30){ 
        global $_cbase;
        $mkv = $_cbase['mkv']['mkv'];
        $mod = $this->mod;
        $sbar = "\n".$this->so->Type(120,basLang::show('flow.op0_cat')); 
        $sbar .= "\n&nbsp; ".$this->so->Word(80,80,basLang::show('flow.op0_filt'));
        $sbar .= "\n&nbsp; ".$this->so->Show(60);
        $sbar .= "\n&nbsp; ".$this->so->Order(array('aid' => basLang::show('flow.dops_orduidd'),'aid-a' => basLang::show('flow.dops_orduida'),));
        $updlink = ($this->cfg['etab']==4) ? basLang::show('flow.op_upd') : "<a href='?$mkv&mod=$mod&view=list&umod=upd'>".basLang::show('flow.op_upd')."</a>";
        $this->so->Form("[$updlink] | ".$sbar,$msg,$width);
    }
    
    // avLink // 
    function avLink($r){ 
        if($this->cfg['etab']==3){
            return '#';
        }elseif(!empty($r['pmod']) && !empty($r['pid']) && empty($r['url'])){
            return "/plus/api/redir.php?$r[pmod].$r[pid]";
        }else{
            return empty($r['url']) ? '#' : $r['url'];
        }
    }

    // PKey pMod,pKey资料
    function fmPKey(){ 
        $_groups = glbConfig::read('groups');
        $mod = $this->mod;
        $val = @$this->fmo['pid']; $val || $val = basReq::val('pid');
        $pmod = @$this->fmo['pmod'];
        $arr = admPFunc::modList(array('docs','users'),$pmod); //'coms',
        $sels = "<select id='fm[pmod]' name='fm[pmod]'>".basElm::setOption($arr,$pmod)."</select>";
        $item = "<input name='fm[pid]' type='text' id='fm[pid]' value='$val'> &nbsp; ";
        //$item .= "<input type='text' id='fm[refname]' value='' class='txt w240'>";
        $item .= "$sels<input type='button' value='".basLang::show('flow.dops_fromdata')."' onclick=\"pickOpen('fm[pmod]','','fm[pid]','fm[title]',1)\" class='btn'>";
        glbHtml::fmae_row(basLang::show('flow.dops_fromdata'),$item);
        glbHtml::fmae_row(basLang::show('flow.dops_icat'),$this->fmType('catid').' &nbsp; '.basLang::show('flow.dops_ishow').$this->fmShow());
    }

    // 属性设置
    function fmProp(){ 
        dopFunc::fmSafe();
        $mod = $this->mod;
        echo "<tr><th nowrap>".basLang::show('flow.title_attrset')."</th><th class='tr'>---</th></tr>\n";
        glbHtml::fmae_row(basLang::show('flow.title_attrtitle'),' &nbsp; ID:'.$this->fmSetID()); //'显示:'.$this->fmShow().
        $this->fmAE3();
    }
    // PKey pMod,pKey资料
    function svPKey($type='add'){ 
        $pid = preg_replace('/[^0-9A-Za-z\.\-]/','',@$this->fme['pid']);
        $pid && $this->fmv['pid'] = $pid;
        $this->fmv['pmod'] = @$this->fme['pmod'];
    }
    // svEKey，
    function svEKey(){
        $aid = basReq::val('aid');
        $this->svMoveFiles($aid);
        return preg_replace('/[^0-9A-Za-z\.\-]/','',$aid);
    }
    
}
