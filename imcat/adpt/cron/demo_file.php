<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

// 1. ����:db,stamp
// 2. ����:$rdo = pass/fail

$rdo = 'fail';

// code1: ex-dosth-1
// code2: ex-dosth-2
// code3: ...
basDebug::bugLogs('demo_file','do-sth','detmp','db');

$rdo = 'pass';
