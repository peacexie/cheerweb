<?php
(!defined('RUN_INIT')) && die('No Init');
// supml -> bdpart-multi-language

$_cbase['lang']['cn']["i_about"] = array(
    'profile' => array (
      'title' => '公司简介',
    ),
    'awhua' => array (
      'title' => '企业文化',
    ),
    'aserv' => array (
      'title' => '服务内容',
    ),
    'anews' => array (
      'title' => '公司新闻',
    ),
    'apics' => array (
      'title' => '公司图片',
    ),
    'afqas' => array (
      'title' => '常见问题',
    ),
    'alink' => array (
      'title' => '联系我们',
    ),
    'aduty' => array (
      'title' => '责权申明',
    ),
);
$_cbase['lang']['cn']["i_news"] = array(
    'n1012' => array (
      'title' => '企业新闻',
    ),
    'n1014' => array (
      'title' => '行业新闻',
    ),
    'n1016' => array (
      'title' => '国内新闻',
    ),
    'n1018' => array (
      'title' => '国际新闻',
    ),
    'nsys' => array (
      'title' => '系统新闻',
    ),
    'ntmp' => array (
      'title' => '演示测试',
    ),
);
$_cbase['lang']['cn']["i_cargo"] = array(
    'p1012' => array (
      'title' => '手机配件',
    ),
    'p1014' => array (
      'title' => '书籍音像',
    ),
    'p1016' => array (
      'title' => '服装饰品',
    ),
    'p1018' => array (
      'title' => '家电家具',
    ),
    // 自定义...
);

$_cbase['lang']['cn']["i_hinfo"] = array(
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
$_cbase['lang']['cn']["i_brand"] = array(
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

$_cbase['lang']['cn']["f_need"] = array(
    'ntype' => array (
      'title' => '类别',
      'cfgs' => "b1=想购买\nc2=想咨询\nc3=想了解\nd4=想报错\nd5=想投诉",
    ),
    'mname' => array (
      'title' => '会员名称',
      'vtip' => '2-24字符',
    ),
    'mtel' => array (
      'title' => '电话',
      'vtip' => '2-24字符',
    ),
);
$_cbase['lang']['cn']["f_nrem"] = array(
    'title' => array (
      'title' => '标题',
      'vtip' => '标题2-60字符',
    ),
    'detail' => array (
      'title' => '内容',
      'vtip' => '内容10字符以上',
    ),
    'mname' => array (
      'title' => '昵称',
      'vtip' => '2-24字符',
    ),
);
$_cbase['lang']['cn']["f_crem"] = $_cbase['lang']['cn']["f_nrem"];
$_cbase['lang']['cn']["f_gbook"] = $_cbase['lang']['cn']["f_nrem"];
$_lxarr = array ( // leixing
  'title' => 'type',
  'cfgs' => "t124=咨询\nt128=建议\nt132=投诉\nt136=致谢\nt148=帮助",
);
$_lxstr = json_encode($_lxarr);
$_cbase['lang']['en']["f_gbook"]['leixing'] = json_decode($_lxstr,1);
