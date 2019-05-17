<?php
namespace imcat;
(!defined('RUN_INIT')) && die('No Init');

$_sy_wmark['type']   = 'text'; // 0,pic,text, 水印类型：pic-配置中的图片, text-配置中的文字
$_sy_wmark['stext']  = basEnv::topDomain($_SERVER['SERVER_NAME']); //水印文字内容('my_domain.com')
$_sy_wmark['plogo']  = '/assets/logo/logo-site.gif'; //水印图片文件(root目录)
$_sy_wmark['width']  = '200'; //文字宽度
$_sy_wmark['height'] = '40'; //文字高度
$_sy_wmark['size']   = '24'; //文字大小
$_sy_wmark['font']   = '/media/fonts/simkai.ttf'; // //文字字体(static目录)
$_sy_wmark['ctext']  = '255'; // 文字颜色: #CCC
$_sy_wmark['cborder'] = '51'; // 文字边框: #333 

// 水印位置
// - (0-9,margin=10) 0-9:0为随机,其他代表上中下9个部分位置; margin:水印边距
// - (-10,20) 距离下方10px, 右方20px
$_sy_wmark['pos'] = array(0,10);

