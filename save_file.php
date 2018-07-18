<?php 
header('Content-Type: text/html; charset=windows-1251');
header('P3P: CP="NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Content-transfer-encoding: binary');
header('Content-Disposition: attachment; filename=list.xls');
header('Content-Type: application/x-unknown');

//include 'result_table.php';

$excel_table = file_get_contents('tmp_file.txt');

echo $excel_table;

// отключаем и очищаем буфер
//ob_end_clean(); 

/*
echo '
<table border=\"1\">
<tr><td>';
htmlentities(iconv(\"utf-8\", \"windows-1251\", $content),ENT_QUOTES, \"cp1251\"));
</td></tr>
</table>
';*/
?>