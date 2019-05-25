<?php
(!defined('RUN_INIT')) && die('No Init');
// supml -> bdpart-multi-language

$_cbase['lang']['en']["i_about"] = array(
    'profile' => array (
      'title' => 'Company profile',
    ),
    'awhua' => array (
      'title' => 'corporate culture',
    ),
    'aserv' => array (
      'title' => 'service content',
    ),
    'anews' => array (
      'title' => 'Company news',
    ),
    'apics' => array (
      'title' => 'Company pictures',
    ),
    'afqas' => array (
      'title' => 'Common problem',
    ),
    'alink' => array (
      'title' => 'Contact us',
    ),
    'aduty' => array (
      'title' => 'Affirming responsibility and power',
    ),
);
$_cbase['lang']['en']["i_news"] = array(
    'n1012' => array (
      'title' => 'Corporate news',
    ),
    'n1014' => array (
      'title' => 'Industry news',
    ),
    'n1016' => array (
      'title' => 'home news',
    ),
    'n1018' => array (
      'title' => 'international news',
    ),
    'nsys' => array (
      'title' => 'System news',
    ),
    'ntmp' => array (
      'title' => 'Demonstration test',
    ),
);
$_cbase['lang']['en']["i_cargo"] = array(
    'p1012' => array (
      'title' => 'Mobile Accessories',
    ),
    'p1014' => array (
      'title' => 'Book audio and video',
    ),
    'p1016' => array (
      'title' => 'Fashion and Accessories',
    ),
    'p1018' => array (
      'title' => 'Household appliance furniture',
    ),
    // custom...
);

$_cbase['lang']['en']["i_hinfo"] = array(
    'home' => array (
      'title' => 'Home-Mark',
    ),
    'pindao' => array (
      'title' => 'Catalog-Mark',
    ),
    'zhuanti' => array (
      'title' => 'Topic-Mark',
    ),
    'hmob' => array (
      'title' => 'Mobile-Mark',
    ),
);
$_cbase['lang']['en']["i_brand"] = array(
    'aimo' => array (
      'title' => 'Aimo',
    ),
    'bailian' => array (
      'title' => 'Bailian',
    ),
    'huawei' => array (
      'title' => 'Huawei',
    ),
);

$_cbase['lang']['en']["f_need"] = array(
    'ntype' => array (
      'title' => 'category',
      'cfgs' => "b1=Buy\nc2=Consult\nc3=Know more\nd4=Report mistake\nd5=Complain",
    ),
    'mname' => array (
      'title' => 'Member name',
      'vtip' => '2-24character',
    ),
    'mtel' => array (
      'title' => 'Telephone',
      'vtip' => '2-24character',
    ),
);
$_cbase['lang']['en']["f_nrem"] = array(
    'title' => array (
      'title' => 'Title',
      'vtip' => 'Title 2-60 Characters',
    ),
    'detail' => array (
      'title' => 'content',
      'vtip' => 'Content more than 10 characters',
    ),
    'mname' => array (
      'title' => 'Nickname?',
      'vtip' => '2-24character',
    ),
);
$_cbase['lang']['en']["f_crem"] = $_cbase['lang']['en']["f_nrem"];
$_cbase['lang']['en']["f_gbook"] = $_cbase['lang']['en']["f_nrem"];
$_lxarr = array ( // leixing
  'title' => 'type',
  'cfgs' => "t124=Consultation\nt128=Recommendation\nt132=Complaint\nt136=Thanks\nt148=Help",
);
$_lxstr = json_encode($_lxarr);
$_cbase['lang']['en']["f_gbook"]['leixing'] = json_decode($_lxstr,1);
