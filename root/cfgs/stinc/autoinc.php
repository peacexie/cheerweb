<?php 
//$aincfile = '/root/run/_init.php';
//$aincfile = '/cfgs/stinc/404_info.php';

function autoInc_ys($file=''){
    if(empty($file)) return $file;
    $path = ''; // -- �Զ����·��
    // /xvars/html/model/yyyy/md/id/
    for($i=0;$i<6;$i++){
        $path = empty($path) ? __DIR__ : dirname($path);
        $full = "$path$file";
        if(file_exists($full)){
            return $full;    
            break;
        } 
    }
    return '';
}

if(!empty($aincfile) && $aincpath=autoInc_ys($aincfile)){
    include $aincpath;
}
