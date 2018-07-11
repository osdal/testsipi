﻿<?php 
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

if (!file_exists($resultfile)) {
    // Если файл отсутвует, сообщаем ошибку
    echo "Ошибка обработки файла: $resultfile";
 
} else {
    // Начинаем обрабатывать файл, если все прошло успешно
    
    $textget = file_get_contents($resultfile);
               htmlspecialchars($textget); // при желании, можно вывести на экран через echo
 				echo "<pre>";
 				echo $textget;
 				echo "</pre>";
    if (preg_match("/Host/", $textget)) {//Проверяем наличие директивы Host
        echo "Директива Host есть <br />";
        $num_host = substr_count($textget, 'Host');//Посчитываем количество директив Host
        echo "Ноst используется $num_host раз"; 
    } else {
        echo "Директивы Host нет <br />";
    }
 
    echo '<br /> Размер файла ' . $resultfile . ': ' . filesize($resultfile) . ' байт'.'<br />';
    if (preg_match("/Sitemap/", $textget)){//Проверяем наличие директивы Sitemap
    	echo "Директива Sitemap есть <br />";
    } else {
        echo "Директивы Sitemap нет <br />";
    }
 
}
