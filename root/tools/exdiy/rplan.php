<?php
namespace imcat;
require __DIR__.'/_config.php';  

glbHtml::page("Run Plan - (sys_name)",1);
echo "<meta http-equiv='refresh' content='14400' />\n";
eimp('initJs','jquery;/tools/exdiy/rplan.js');
eimp('initCss','stpub;/tools/exdiy/style.css');
echo glbHtml::wpscale(480, 1);
glbHtml::page('body');

$ocfgs = read('outdb','ex');
$safix = $_cbase['safe']['safix'];
$sapp = $ocfgs['sign']['sapp'];
$skey = $ocfgs['sign']['skey'];

$act = req('act','');
include __DIR__.'/rplan.htm';
glbHtml::page('end');
?>

<script>
// >請勿關閉! 定時XX 偵側程序

<?php echo "var urlp = '{$safix}[sapp]=$sapp&{$safix}[skey]=$skey';\n"; ?>
var pLists = [
  // configs
  /*
  new Array("clear_acts", "00:20"),
  new Array("clear_logs", "00:40"),
  new Array("clear_wex",  "01:00"),
  */
  <?php if($act=='utest') echo exvCron::plistTest(); ?>
]; 
<?php if($act!='alist') echo "setTimeout('timeSec()',1000);"; ?>

</script>

