<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

// 1. ����:db,stamp
// 2. ����:$rdo = pass/fail

$rdo = 'fail';

// code1: ex-dosth-1
// code2: ex-dosth-2
// code3: ...
basDebug::bugLogs('hook_demo','do-sth','detmp','db');

$rdo = 'pass';

/*
http://www.thinkphp.cn/extend/876.html
�Զ�ע��Hook���ƹ���
*/
