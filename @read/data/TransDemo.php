<?php
namespace imcat;
require(dirname(dirname(__DIR__)).'/root/run/_init.php');

/*
    使用百度翻译服务提示：
    阅读：百度文档：http://api.fanyi.baidu.com/api/trans/product/apidoc
    申请：APP ID/密钥；填入文件：`root/cfgs/excfg/ex_ais.php` 中，即可使用
*/

$part = 'fanyi'; // all, trans, yuyan, fanyi
#dump(aisYuyan::token()); die();


if($part=='all' || $part=='trans'){

// 把文件：flow-ru.php 从俄语翻译成日语
//$res = devBuild::trsfp(DIR_ROOT.'/extra/kvphp/flow-ru.php', 'jp', 'ru');

$res = devBuild::trsfp(DIR_ROOT.'/extra/kvphp/flow-jp.php', 'jp');
$res = devBuild::trsfp(DIR_ROOT.'/extra/ucfgs/cfglibs-jp.php', 'jp');
$res = devBuild::trsfp(DIR_ROOT.'/extra/ptinc/aflow-jp.php', 'jp');
$res = devBuild::trsfp(DIR_ROOT.'/extra/ptinc/uless-jp.php', 'jp');
//dump($res); echo "<hr>\n"; die();
/*
$fp1 = '/lang/ptinc/aflow-cn.php'; // 
$res = devBuild::trans(DIR_IMCAT.$fp1, 'fra', 'html');
dump($res); echo "<hr>\n";

//

$fp1 = '/lang/kvphp/flow-cn.php';
$res = devBuild::trans(DIR_IMCAT.$fp1, 'fra', '');
dump($res); echo "<hr>\n";
*/


# ==============================
}
if($part=='all' || $part=='yuyan'){

$title = "冠科泊樾湾同时在售洋房和L0FT公寓";
$content = "26宗！105万㎡！245亿！东莞2018招拍挂商住地收金创历史新高，供应量也创近三年新高。
在全国房地产调控持续收紧基调下，东莞2018土地市场也难脱其手，依旧保持高度调控状态，几乎全部地块均采用“限价+竞自持”模式进行拍卖，后期还陆续引入了商业全自持、无偿配建安居房、配建车位、招商等种种硬性条件，更考验开发商的实力。换句话说，房企除了有钱，还得有综合开发运营能力才更有竞争力。
值得一提的是，2018年房企东莞拿地越来越理性，底价拿地已成主流，还出现了3宗流拍地块、5宗终止出让地块和1宗中止出让地块，土地市场已经逐渐恢复平静。";

$title = "冠科泊樾湾同时在售洋房和L0FT公寓";
$content = "冠科泊樾湾目前有少量洋房在售，建面约82-124㎡三房四房，非毛坯房均价23000元/㎡。现主推新开盘的商住公寓新品5#6#楼，建面约49-75㎡LOFT复式户型产品，非毛坯房交付，均价23000-24000元/㎡。";

$cont2 = "<br>傻逼，妈的；打倒-蒋匪；枪杀案；明天10:00抢银行；组织卖淫服务；";
$cont2 .= "<br>加我微信：13512386778；欢迎访问我的网站：fzg360.com；";

// 标签提取
$res1 = aisYuyan::tags($title, $content, 999);
dump($res1);


// 文本审核
$cont = $content.$cont2;
$res2 = aisYuyan::check($cont);
dump($res2);

// 摘要提取
$res3 = aisYuyan::sums($title, $content, 120);
dump($res3);
// 15000元/㎡ -=> 15000元/0；
// 前后截取，可按标点断句。

// 文本纠错
$ct4 = '百度是一家人工只能公司';
$ct4 = '位置(pozition)：帮助文档 > 产品文当 > 自然语言处理 > API参考'; // 文当(文档), pozition(position)
$ct4 = '今天天汽很好，我想洗洗一服，然后去看大海'; // 汽/气; 一/依/衣 依
#$ct4 = 'There are subs item in this part, Please delete tham first'; // tham/them
$res4 = aisYuyan::ecnet($ct4);
dump($res4);


# ==============================
}
if($part=='all' || $part=='fanyi'){


$q = "测试成功(1)";
$res1 = aisTrans::main($q, 'ch', 'en');
dump($res1); 

$p[] = "测试成功(1)";
$p[] = "测试失败(2)";
$res2 = aisTrans::main($p, 'ch', 'en');
dump($res2); 


}

/*

$res = aisYuyan::token();
$token = $res['access_token'];
#dump($res);

免费：5 QPS限制
单价：
 - 40元 /天/1QPS）
 - 1000元 /月/1QPS）

*/
