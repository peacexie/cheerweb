<?php
//模板显示格式

$_sy_vopcfg = array();

// 所有语言
$_sy_vopcfg['langs'] = array(
    'en' => array(
        'English',  
        'En'
    ),
    'cn' => array(
        '中文版',  
        '中'
    ), 
);

// 所有模板
$_sy_vopcfg['tpl'] = array(
    'adm' => array(
        array('cn'=>'管理中心', 'en'=>'Admin'),
        '/root/run/adm.php',
    ),
    'comm' => array(
        '中文版',
        '/vcn.php',
        //'/', // 伪静态配置：把`.php?` ->替换为 `/`
        //'.htm', // 伪静态后缀
        //'0', // 建议不开启, 伪静态-替换第一层/home/目录，需要调整伪静态规则
        //array('/home.php','/home.htm'), //  建议为空, 伪静态首页替换；需要增加伪静态规则
    ), 
    // --- ex:start
    'ven' => array(
        'English',
        '/ven.php',
    ), 
    'vfr' => array(
        'Française',
        '/vfr.php',
    ), 
    'vru' => array(
        'Русский',
        '/vru.php',
    ), 
    'ves' => array(
        'Español',
        '/ves.php',
    ), 
    /*
    'vjp' => array(
        '日本語',
        '/vjp.php',
    ), 
    'vkr' => array(
        '한국어',
        '/vkr.php',
    ),
    */
    // --- ex:end
    'base' => array(
        array('cn'=>'默认首页', 'en'=>'Basic'),
        '/index.php', // index,base
    ),
);

// 各模块展示show
$_sy_vopcfg['show'] = array( 
    //'chn' => array('',''), // topic,faqs
    //'doc' => array(''),
    'dev' => array('demo'), 
    'umc' => array('indoc'), 
    //'mob' => array('votes'),
    '_defront_' => 'comm', //默认展示模板
    '_deadmin_' => 'adm', //默认管理模板
    '_hidden_' => array('adminer','inmem'), //无展示模块
);
