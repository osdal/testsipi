<?php
$file_headers = get_headers($url, 0);// подготавливаем headers страницы
/*
if (preg_match("/200/",$file_headers[0])){
	echo "Редиректа нет";
} elseif (preg_match("/3??/",$file_headers[0])) {
	echo 'Есть редирект'; 
} else (preg_match("/5??/",$file_headers[0])) {
	echo "Проблема на сервере";
}endif;
echo "<pre>";
print_r($file_headers);
echo "</pre>";*/
echo "$file_headers[0]";
if (preg_match("/200/",$file_headers[0])) {
	echo 'Редиректа нет';
}elseif (preg_match("/3??/",$file_headers[0])){
	echo 'Есть редирект';
}
?>