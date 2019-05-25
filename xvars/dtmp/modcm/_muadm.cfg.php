<?php
$_muadm = array (
  'kid' => 'muadm',
  'pid' => 'menus',
  'title' => '后台菜单',
  'enable' => '1',
  'etab' => '1',
  'deep' => '3',
  'i' => 
  array (
    'm1info' => 
    array (
      'kid' => 'm1info',
      'pid' => '0',
      'title' => '主营',
      'icon' => 'bullhorn',
      'deep' => '1',
      'cfgs' => '',
    ),
    'm2abt' => 
    array (
      'kid' => 'm2abt',
      'pid' => 'm1info',
      'title' => '介绍与设置',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3about' => 
    array (
      'kid' => 'm3about',
      'pid' => 'm2abt',
      'title' => '企业介绍',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '站点介绍(!)?dops-a&mod=about
增加(!)about(!)jsadd',
    ),
    'm3mpts' => 
    array (
      'kid' => 'm3mpts',
      'pid' => 'm2abt',
      'title' => '资料同步',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '资料同步(!)?apis-exp_mpts&mod=about
产品(!)?apis-exp_mpts&mod=cargo',
    ),
    'm2info' => 
    array (
      'kid' => 'm2info',
      'pid' => 'm1info',
      'title' => '新闻中心',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3news' => 
    array (
      'kid' => 'm3news',
      'pid' => 'm2info',
      'title' => '新闻动态',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '新闻动态(!)?dops-a&mod=news
增加(!)news(!)jsadd',
    ),
    'm3nrem' => 
    array (
      'kid' => 'm3nrem',
      'pid' => 'm2info',
      'title' => '新闻评论',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '新闻评论(!)?dops-a&mod=nrem(!)
栏目(!)?admin-catalog&mod=news(!)frame',
    ),
    'm2pro' => 
    array (
      'kid' => 'm2pro',
      'pid' => 'm1info',
      'title' => '产品中心',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3pro' => 
    array (
      'kid' => 'm3pro',
      'pid' => 'm2pro',
      'title' => '产品管理',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '产品管理(!)?dops-a&mod=cargo
增加(!)cargo(!)jsadd',
    ),
    'm3cset' => 
    array (
      'kid' => 'm3cset',
      'pid' => 'm2pro',
      'title' => '意向评论',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '购买意向(!)?dops-a&mod=need
评论(!)?dops-a&mod=crem',
    ),
    'm2else' => 
    array (
      'kid' => 'm2else',
      'pid' => 'm1info',
      'title' => '互动留言',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3gbook' => 
    array (
      'kid' => 'm3gbook',
      'pid' => 'm2else',
      'title' => '网站留言管理',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '?dops-a&mod=gbook',
    ),
    'm3notea' => 
    array (
      'kid' => 'm3notea',
      'pid' => 'm2else',
      'title' => '站务笔记管理',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '笔记管理(!)?dops-a&mod=notea
发布(!)notea(!)jsadd',
    ),
    'm1adv' => 
    array (
      'kid' => 'm1adv',
      'pid' => '0',
      'title' => '广告',
      'icon' => 'link',
      'deep' => '1',
      'cfgs' => '',
    ),
    'm1tool' => 
    array (
      'kid' => 'm1tool',
      'pid' => '0',
      'title' => '工具',
      'icon' => 'gavel',
      'deep' => '1',
      'cfgs' => '',
    ),
    'm2sys' => 
    array (
      'kid' => 'm2sys',
      'pid' => 'm1tool',
      'title' => '系统工具',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3catch' => 
    array (
      'kid' => 'm3catch',
      'pid' => 'm2sys',
      'title' => '缓存静态',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '系统缓存(!)?admin-update
静态(!)?admin-static',
    ),
    'm3self' => 
    array (
      'kid' => 'm3self',
      'pid' => 'm2sys',
      'title' => '个人资料',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '个人资料(!)?admin-uinfo
密码(!)?admin-uinfo&view=passwd',
    ),
    'm3env' => 
    array (
      'kid' => 'm3env',
      'pid' => 'm2sys',
      'title' => '环境检测',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '<a href="?admin-ediy&part=binfo">基础环境</a> 
- <a href="?admin-ediy&part=check">检测</a>',
    ),
    'm3ediy' => 
    array (
      'kid' => 'm3ediy',
      'pid' => 'm2sys',
      'title' => '配置搜索',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '<a href="?admin-ediy&part=exdiy">DIY配置</a> 
- <a href="?admin-ediy&part=search">搜索</a>',
    ),
    'm2fav' => 
    array (
      'kid' => 'm2fav',
      'pid' => 'm1tool',
      'title' => '我的收藏',
      'icon' => '',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3favor' => 
    array (
      'kid' => 'm3favor',
      'pid' => 'm2fav',
      'title' => '收藏帮助',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '网址收藏(!)?dops-a&mod=adfavor&view=vself
帮助(!)http://txmao.txjia.com/dev.php(!)blank',
    ),
    'm1adm' => 
    array (
      'kid' => 'm1adm',
      'pid' => '0',
      'title' => '架设',
      'icon' => 'cogs',
      'deep' => '1',
      'cfgs' => '',
    ),
    'm2stru' => 
    array (
      'kid' => 'm2stru',
      'pid' => 'm1adm',
      'title' => '超管架构',
      'icon' => 'gear',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3model' => 
    array (
      'kid' => 'm3model',
      'pid' => 'm2stru',
      'title' => '模块架设',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '模块架设(!)?admin-groups
扩展(!)?admin-upgrade&mod=extend',
    ),
    'm3auser' => 
    array (
      'kid' => 'm3auser',
      'pid' => 'm2stru',
      'title' => '管理员:设置/添加',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '管理员(!)?dops-a&mod=adminer
添加(!)adminer(!)jsadd',
    ),
    'm3catalog' => 
    array (
      'kid' => 'm3catalog',
      'pid' => 'm2stru',
      'title' => '栏目管理:文档/广告',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '<a href="?admin-catalog" title="文档栏目">栏目管理</a> 
- 
<a href="?admin-catalog&mod=adpic" title="广告栏目">广告</a>',
    ),
    'm3relat' => 
    array (
      'kid' => 'm3relat',
      'pid' => 'm2stru',
      'title' => '类别:管理/关联',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '类别管理(!)?admin-types
关联(!)?admin-relat',
    ),
    'm3amenu' => 
    array (
      'kid' => 'm3amenu',
      'pid' => 'm2stru',
      'title' => '菜单导航配置',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '?admin-menus',
    ),
    'm3grade' => 
    array (
      'kid' => 'm3grade',
      'pid' => 'm2stru',
      'title' => '等级权限设置',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '?admin-grade',
    ),
    'm2adt' => 
    array (
      'kid' => 'm2adt',
      'pid' => 'm1adm',
      'title' => '超管工具',
      'icon' => 'gavel',
      'deep' => '2',
      'cfgs' => '',
    ),
    'm3paras' => 
    array (
      'kid' => 'm3paras',
      'pid' => 'm2adt',
      'title' => '参数设置',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '核心参数(!)?admin-paras
扩展(!)?admin-parex',
    ),
    'm3dbs' => 
    array (
      'kid' => 'm3dbs',
      'pid' => 'm2adt',
      'title' => '数据库管理',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '数据库(!){root}/root/tools/adbug/dbadm.php(!)blank
管理(!)?admin-db_act',
    ),
    'm3safes' => 
    array (
      'kid' => 'm3safes',
      'pid' => 'm2adt',
      'title' => '安全日志',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '安全参数(!)?admin-paras&mod=prsafe
日志(!)?admin-rlogs&mod=syact',
    ),
    'm3upver' => 
    array (
      'kid' => 'm3upver',
      'pid' => 'm2adt',
      'title' => '更新升级',
      'icon' => '',
      'deep' => '3',
      'cfgs' => '系统升级(!)?admin-upgrade
导入(!)?admin-upgrade&mod=import',
    ),
  ),
);
?>