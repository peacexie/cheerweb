<?php
namespace imcat;

// exvCron计划任务
class exvCron{

    static function getCfgs(){ 
        //return $cfg;    
    }

    static function plistAll(){ 
        $list = "\n";
        $larr = glbDBObj::dbObj()->table('bext_cron')->where("1=1")->select(); 
        foreach($larr as $val){
            $list .= "\tnew Array('{$val['kid']}','{$val['exsecs']}'), // {$val['title']}\n";
        }
        return $list;
        /*
            [excycle] => 5
            [excunit] => d
            [exlast] => 1466984842
            [exnext] => 1467418687
        */
    }

    static function plistTest(){ 
        $hm1 = date('H:i');
        $hm2 = $hm1."@".date('w');
        $hm3 = $hm1."@".((date('w')+3)%7);
        $hm4 = date('H:i', $_SERVER["REQUEST_TIME"]+60);
        $list = "\n";
        for($i=1;$i<=4;$i++){
            $k = "hm$i";
            $list .= "\tnew Array('script_$i','{$$k}'),\n";
        }
        return $list;
    }
    
/*
 
*/

}
