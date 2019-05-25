<?php
$_news = array (
  'kid' => 'news',
  'pid' => 'docs',
  'title' => '新闻中心',
  'enable' => '1',
  'etab' => '1',
  'deep' => '1',
  'cfgs' => 'parts=1',
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
    'color' => 
    array (
      'kid' => 'color',
      'title' => '标题颜色',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:4-7',
      'vtip' => '如:#FF00FF',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'color',
      'fmexstr' => 'title',
      'cfgs' => '',
    ),
    'ndb_repeat' => 
    array (
      'kid' => 'ndb_repeat',
      'title' => '检查重复',
      'etab' => '0',
      'type' => 'repeat',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'repeat',
      'fmexstr' => '',
      'cfgs' => 'news,title',
    ),
    'hinfo' => 
    array (
      'kid' => 'hinfo',
      'title' => '推荐',
      'etab' => '0',
      'type' => 'radio',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'hinfo',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '内容',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'mediumtext',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '640x320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'editor',
      'fmexstr' => 'full,exbar',
      'cfgs' => '',
    ),
    'seo_key' => 
    array (
      'kid' => 'seo_key',
      'title' => '关键字',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'seo_des' => 
    array (
      'kid' => 'seo_des',
      'title' => '描述',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'seo_tag' => 
    array (
      'kid' => 'seo_tag',
      'title' => '标签',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mpic' => 
    array (
      'kid' => 'mpic',
      'title' => '缩略图',
      'etab' => '0',
      'type' => 'file',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:image',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'jump' => 
    array (
      'kid' => 'jump',
      'title' => '跳转地址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:uri',
      'vtip' => 'http://开头',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'source' => 
    array (
      'kid' => 'source',
      'title' => '来源',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'click' => 
    array (
      'kid' => 'click',
      'title' => '点击次数',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '如:888',
      'vmax' => '8',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'author' => 
    array (
      'kid' => 'author',
      'title' => '作者',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'rel_doc' => 
    array (
      'kid' => 'rel_doc',
      'title' => '相关信息',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => 'news.3',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'pick',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
  'i' => 
  array (
    'n1012' => 
    array (
      'kid' => 'n1012',
      'pid' => '0',
      'title' => '企业新闻',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Q',
      'cfgs' => '',
    ),
    'n1014' => 
    array (
      'kid' => 'n1014',
      'pid' => '0',
      'title' => '行业新闻',
      'deep' => '1',
      'frame' => '0',
      'char' => 'X',
      'cfgs' => '',
    ),
    'n1016' => 
    array (
      'kid' => 'n1016',
      'pid' => '0',
      'title' => '国内新闻',
      'deep' => '1',
      'frame' => '0',
      'char' => 'G',
      'cfgs' => '',
    ),
    'n1018' => 
    array (
      'kid' => 'n1018',
      'pid' => '0',
      'title' => '国际新闻',
      'deep' => '1',
      'frame' => '0',
      'char' => 'G',
      'cfgs' => '',
    ),
    'nsys' => 
    array (
      'kid' => 'nsys',
      'pid' => '0',
      'title' => '系统新闻',
      'deep' => '1',
      'frame' => '0',
      'char' => 'X',
      'cfgs' => '',
    ),
    'ntmp' => 
    array (
      'kid' => 'ntmp',
      'pid' => '0',
      'title' => '演示测试',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
  ),
);
?>