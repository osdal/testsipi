<?php 
$get_robottxt = $url.'/'.'robots.txt';//Путь к robot.txt
$file = fopen('robots.txt', 'w');// открываем файл для записи

$ch = curl_init();// инициализация cURL
  curl_setopt($ch, CURLOPT_URL, $get_robottxt);
  curl_setopt($ch, CURLOPT_FILE, $file);
  curl_exec($ch);
  fclose($file);
  curl_close($ch);

global $resultfile; // описываем как глобальную переменную
$resultfile = 'robots.txt'; // файл, который получили с сайта
//Проверяем наличие файла robot.txt
$headers = get_headers($get_robottxt);//Получаем заголовки
$response_code = substr($headers[0], 9, 3);//Вырезаем код ответа
    if ($response_code == '404') {
    	echo "<br/>Файл robot.txt отсутствует";
    	include 'result_table.php';
    }
    else {
    // Начинаем обрабатывать файл, если все прошло успешно
    $headers = get_headers($get_robottxt);//Получаем заголовки
    $response_code = substr($headers[0], 9, 3);//Вырезаем код ответа 
    echo "<br />код ответа сервера для файла robot.txt равен $response_code<br />";
    
    
    $textget = file_get_contents($resultfile);
               htmlspecialchars($textget); // при желании, можно вывести на экран через echo
 				/*
 				echo "<pre>";
 				echo $textget;
 				echo "</pre>";
 				*/
    if (preg_match("/Host/", $textget)) {//Проверяем наличие директивы Host
        echo "Директива Host есть <br />";
        $num_host = substr_count($textget, 'Host');//Посчитываем количество директив Host
        echo "Ноst используется $num_host раз"; 
    } else {
        echo "Проверка невозможна, т. к. директивы Host нет <br />";
    }
 
    echo '<br /> Размер файла ' . $resultfile . ': ' . filesize($resultfile) . ' байт'.'<br />';
    $file_size = filesize($resultfile);
    if (preg_match("/Sitemap/", $textget)){//Проверяем наличие директивы Sitemap
    	$sitemap = true;
    	echo "Директива Sitemap есть <br />";
    } else {
        echo "Директивы Sitemap нет <br />";
    }
    //$result_table = file_get_contents('result_table.php');
    //echo $result_table;
    //unlink($resultfile);
    include 'result_table.php';
    
 
}
