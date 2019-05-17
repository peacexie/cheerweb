<?php 
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');
#safComm::urlFrom(); 

$act = basReq::val('act','initJs'); 
$exjs = basReq::val('exjs'); 
$excss = basReq::val('excss'); 
$tpldir = basReq::val('tpldir'); 
$lang = basReq::val('lang',$_cbase['sys']['lang']);
$rf = basReq::val('rf'); // mkv
$skin = basReq::val('skin');
glbHtml::head($excss ? 'css' : 'js');

if(strstr($act,'initJs')){ // header
    basJscss::loadJqbs($exjs,1,$skin); // zepto,jquery,bootcss,bootstrap,layer
    basJscss::loadCfgjs($exjs,$tpldir,$lang,$rf); // jspop
    basJscss::loadTabs($exjs,$tpldir,$lang,'.js'); // xxx;comm;home
}
if(strstr($act,'initCss')){ // header
    basJscss::loadBasecss($excss,$skin); // bootstrap,stpub,jstyle
    basJscss::loadTabs($excss,$tpldir,$lang,'.css'); // xxx;comm;home
}
if(strstr($act,'loadExtjs')){ // footer
    basJscss::loadExtjs($exjs); // jspop,jq_base,bootstrap,layer
}

if(strstr($act,'autoJQ')){
    if(strstr($exjs,'zepto')){ // 需要自行添加如下zepto文件
        require DIR_VENDUI.'/jquery/zepto-1x.js';
    }else{
        require DIR_VENDUI.'/jquery/jquery-2.x.js';
    }
}

// test
if(strstr($act,'testInfo')){
    echo "document.write('".time()."');";
}

// 一次一个if()关闭,是因为可能出现类似[?act=jsTypes:cargo,brand;jsRelat:relpb;jsFields:cargo ]参数，同时执行几段代码

// 拼音tab    
if(strstr($act,'pycfgTab')){
    $pyTab = str_replace(array("\r","\n",","),"",comConvert::pycfgTab());
    echo "function pycfgTab(){return '$pyTab';}";
}
// 简繁tab    
if(strstr($act,'jfcfgTab')){
    $tab1 = comConvert::jfcfgTab('Jian');
    $tab2 = comConvert::jfcfgTab('Fan');
    echo "function jfcfgJian(){return '$tab1';}\n";
    echo "function jfcfgFan(){return '$tab2';}\n";
}
// Types    
if(strstr($act,'jsTypes')){
    basJscss::jsTypes($act);
}
// Relat    
if(strstr($act,'jsRelat')){
    basJscss::jsRelat($act);
}
// Type2    
if(strstr($act,'jsType2')){
    basJscss::jsType2($act);
}
if(strstr($act,'jsFields')){
    basJscss::jsFields($act);
}
