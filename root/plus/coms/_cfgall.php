<?php
namespace imcat;
define('RUN_COMSADD', 1);
$_cbase['ucfg']['lang'] = '(auto)'; 
#$_cbase['skip']['_all_'] = true;
$_cbase['tpl']['vdir'] = 'adm';
// mlang-start
$_bdpart = empty($_GET['lang']) ? '' : $_GET['lang'];
if($_bdpart){
    //$_cbase['sys']['lang'] = $_bdpart; 
    $_cbase['tpl']['bdpart'] = $_bdpart;
}
// mlang-end
require dirname(dirname(__DIR__)).'/run/_init.php'; 
$lang = $_cbase['sys']['lang'] = $_bdpart; 
$_groups = read('groups');
$db = db(); 
//safComm::urlFrom();
extract(basReq::sysVars());
$aurl = basReq::getUri(-2);

