<?php
define('RUN_FRONT', 1);
//$_cbase['tpl']['tpc_on']  = 1; //是否开启模板缓存，true开启,false不开启 
$_cbase['tpl']['vdir'] = 'ven';
//$_cbase['sys']['lang'] = 'en'; // 切换语言
require __DIR__.'/_init.php'; 
$vop = new \imcat\vopShow();
