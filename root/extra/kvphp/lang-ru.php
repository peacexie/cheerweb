<?php
(!defined('RUN_INIT')) && die('No Init');
// supml -> bdpart-multi-language

$_cbase['lang']['ru']["i_about"] = array(
    'profile' => array (
      'title' => 'компания',
    ),
    'awhua' => array (
      'title' => 'культура предприятия',
    ),
    'aserv' => array (
      'title' => 'Содержание обслуживания',
    ),
    'anews' => array (
      'title' => 'Новости компании',
    ),
    'apics' => array (
      'title' => 'фотография компании',
    ),
    'afqas' => array (
      'title' => 'Общие вопросы',
    ),
    'alink' => array (
      'title' => 'связаться с нами',
    ),
    'aduty' => array (
      'title' => 'декларировать',
    ),
);
$_cbase['lang']['ru']["i_news"] = array(
    'n1012' => array (
      'title' => 'Новости компании',
    ),
    'n1014' => array (
      'title' => 'Отраслевые новости',
    ),
    'n1016' => array (
      'title' => 'внутренние новости',
    ),
    'n1018' => array (
      'title' => 'международные новости',
    ),
    'nsys' => array (
      'title' => 'системная новость',
    ),
    'ntmp' => array (
      'title' => 'демонстрационный тест',
    ),
);
$_cbase['lang']['ru']["i_cargo"] = array(
    'p1012' => array (
      'title' => 'гарнитура',
    ),
    'p1014' => array (
      'title' => 'книги',
    ),
    'p1016' => array (
      'title' => 'одежда',
    ),
    'p1018' => array (
      'title' => 'бытовая мебель',
    ),
    // другой...
);

$_cbase['lang']['ru']["i_hinfo"] = array(
    'home' => array (
      'title' => '首页推荐',
    ),
    'pindao' => array (
      'title' => '频道推荐',
    ),
    'zhuanti' => array (
      'title' => '专题推荐',
    ),
    'hmob' => array (
      'title' => '手机首页',
    ),
);
$_cbase['lang']['ru']["i_brand"] = array(
    'aimo' => array (
      'title' => '爱慕',
    ),
    'bailian' => array (
      'title' => '百利安',
    ),
    'huawei' => array (
      'title' => '华为',
    ),
    // ...
);

$_cbase['lang']['ru']["f_need"] = array(
    'ntype' => array (
      'title' => 'категория',
      'cfgs' => "b1=желание купить\nc2=желание проконсультироваться\nc3=желание узнать\nd4=желание сообщить об ошибке\nd5=желание подать жалобу",
    ),
    'mname' => array (
      'title' => 'Членский состав',
      'vtip' => '2-24знак',
    ),
    'mtel' => array (
      'title' => 'телефон',
      'vtip' => '2-24знак',
    ),
);
$_cbase['lang']['ru']["f_nrem"] = array(
    'title' => array (
      'title' => 'заголовок',
      'vtip' => 'Заголовок 2 - 60 символов',
    ),
    'detail' => array (
      'title' => 'Содержание',
      'vtip' => 'содержимое больше 10 символов',
    ),
    'mname' => array (
      'title' => 'прозвище',
      'vtip' => '2-24знак',
    ),
);
$_cbase['lang']['ru']["f_crem"] = $_cbase['lang']['ru']["f_nrem"];
$_cbase['lang']['ru']["f_gbook"] = $_cbase['lang']['ru']["f_nrem"];
$_lxarr = array ( // leixing
  'title' => 'type',
  'cfgs' => "t124=Консультации\nt128=рекомендация\nt132=жалоба\nt136=благодарность\nt148=помощь",
);
$_lxstr = json_encode($_lxarr);
$_cbase['lang']['ru']["f_gbook"]['leixing'] = json_decode($_lxstr,1);
