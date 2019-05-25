<?php
define('RUN_FRONT', 1);
//$_cbase['tpl']['tpc_on']  = 0; //是否开启模板缓存
$_cbase['tpl']['vdir'] = 'base';
$_cbase['ucfg']['lang'] = '(auto)'; // 切换语言
// mlang-start
$_bdpart = empty($_GET['_bdpart']) ? '' : $_GET['_bdpart'];
if($_bdpart){
    $_cbase['tpl']['bdpart'] = $_bdpart;
}
// mlang-end
require __DIR__.'/root/run/_init.php'; 
$vop = new \imcat\vopShow();
