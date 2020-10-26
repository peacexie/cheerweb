<?php
namespace imcat;
$isMobile = basEnv::isMobile();
$vcfg = vopTpls::etr1('tpl'); unset($vcfg['base'],$vcfg['adm']);  
$title = $_cbase['sys_name'];

$_dtab = array(
    'adm' => 'Your website controlled by you!', 
    'comm' => '开心企业网', 
    'ven' => 'Cheer Website for Enterprise', 
    'vfr' => 'Joyeux Site Web', 
    'vru' => 'радостный сайт предприятия', 
    'ves' => 'Alegre Página web', 
    'vjp' => '嬉しい企業サイト', 
    'vkr' => '즐겁다기업 사이트',
);

$_mdtab = array('about','start','tpdiy','mlang','info1','info2');
$texts = array();
if($this->key=='tips'){
    foreach ($_mdtab as $mdk) {
        $mlfile = vopTpls::tinc("home/tip-$mdk.md",0); 
        $mltext = comFiles::get($mlfile, 1); 
        $texts[$mdk] = extMkdown::pdext($mltext,0);  
    }
} 

