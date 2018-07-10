<?php /*
	//$url = htmlspecialchars($_POST['name']);
	// Remove all illegal characters from a url
	$url = filter_var($url, FILTER_SANITIZE_URL);
	// Validate url
	/*if (!filter_var($url, FILTER_VALIDATE_URL) === true) {
	    echo("$url is a valid URL");
		} else {
	    echo("$url is not a valid URL");
		}*/
	
	//$site_url = var_dump(filter_var($url, FILTER_VALIDATE_URL));
	//$url = filter_var($url, FILTER_VALIDATE_URL);	
		
 ?>

 <?php

$url = htmlspecialchars($_POST['name']);// Очищаем введенное значение от запрещенных символов
	


if (!filter_var($url, FILTER_VALIDATE_URL) === false) {//Проверка имени сайта
    include 'chek.php';//Адрес корректный
} else {
    echo("$url некорректный адрес сайта");
}



?>
	
	