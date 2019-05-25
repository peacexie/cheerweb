<?php
$_nrem = array (
  'kid' => 'nrem',
  'pid' => 'coms',
  'title' => '新闻评论',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'cfgs' => 'showdef=1
ap_cvip=500
allpub=100
ippub=5
iprep=60',
  'pmod' => 'news',
  'cradd' => '10',
  'crdel' => '40',
  'f' => 
  array (
    'title' => 
    array (
      'kid' => 'title',
      'title' => '标题',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '内容',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '内容10字符以上',
      'vmax' => '255',
      'fmsize' => '360x5',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'title' => '会员名称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'str:2-24',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
);
?>