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
$resultfile = 'robots.txt'; // файл, который получили

if (!file_exists($resultfile)) {
    // Если файл отсутвует, сообщаем ошибку
    echo "Ошибка обработки файла: $resultfile";
 
} else {
    // Начинаем обрабатывать файл, если все прошло успешно
    // $file_arr = file("robots.txt");
    $textget = file_get_contents($resultfile);
               htmlspecialchars($textget); // при желании, можно вывести на экран через echo
 				echo "<pre>";
 				echo $textget;
 				echo "</pre>";
    if (preg_match("/Host/", $textget)) {
        echo "Директива Host есть";
    } else {
        echo "Директивы Host нет";
    }
 
    echo 'Размер файла ' . $resultfile . ': ' . filesize($resultfile) . ' байт';
 
}
