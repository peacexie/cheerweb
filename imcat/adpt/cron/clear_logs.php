<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

$rdo = 'fail';

$stnow = $stamp; // 432000=5day, 86400=1�� active_online

foreach(array('logs_syact','logs_detmp') as $tab){ //,'plus_smsend'
	$db->table($tab)->where("atime<'".($stnow-60*86400)."'")->delete();
}
$db->table('logs_dbsql')->where("atime<'".($stnow-86400)."'")->delete();

$rdo = 'pass';
