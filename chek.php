<?php
$file_headers = get_headers($url, 0);// подготавливаем headers страницы
/*
if (preg_match("/200/",$file_headers[0])){
	echo "Редиректа нет";
} elseif (preg_match("/3??/",$file_headers[0])) {
	echo 'Есть редирект'; 
} else (preg_match("/5??/",$file_headers[0])) {
	echo "Проблема на сервере";
}endif;*/
echo "<pre>";
print_r($file_headers);
echo "</pre>";
echo "$file_headers[0]";
if (preg_match("/200/",$file_headers[0])) {
	echo "Редиректа нет. Проверяем сайт $url";
}elseif (preg_match("/3??/",$file_headers[0])){
	echo 'Есть редирект <br />';
	
	//Определяем адрес редиректа
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$a = curl_exec($ch);
	curl_close( $ch );

	$headers = explode("\n",$a);//Формируем массив заголовков

	$redir = $url;

	$j = count($headers);// Подсчитываем количество заголовков
	for($i = 0; $i < $j; $i++){
	       
	if(strpos($headers[$i],"Location:") !== false){//Находи заголовок начинающийся с Location:
	        $redir = trim(str_replace("Location:","",$headers[$i]));//Убираем Location: из полученного заголовка и удаляем пробелы 
	        break;
	    }
}

echo $redir;

}
?>