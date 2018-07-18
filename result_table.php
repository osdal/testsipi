<?php include 'header.php';
	  include 'text_variables.php'; 

// включаем буфер
ob_start();


// отключаем и очищаем буфер
//ob_end_clean(); ?>
	 
<?php
echo '
<table border="1px" cellspacing="0" width="80%">
	<tr>
		<th>№</th>
		<th>Название проверки</th>
		<th>Статус</th>
	</tr>
	<tr class="cell_heigt"><th>
	<tr>';?>
		
		<?php
		
		 	if ($response_code == 404) 
		 			{echo $error_robot_txt;
				} else
					{echo $ok_robot_txt;
					 	if ($num_host != 0) {
						  echo $Host_ok;
					    if ($num_host == 1) {
								echo $Host_num_ok;
						} else {
							echo $error_Host_num;
						}

						} else {
							echo $error_Host;
						}
						 if($file_size < 32000){	
						 echo $size_robot_txt_ok;
								} else {
									echo $error_size_robot_txt;
								}
						 if($sitemap) {
						 	echo $ok_sitemap;
						 } else echo $error_sitemap;
						 if($response_code == 200){
						 	echo $response_code_ok;
						 } else echo $error_response_code;
					 }

					  ?> 
<?php echo '
	</tr>
	<tr></tr>
</table>';?>
<?php

$content;
// сохраняем всё что есть в буфере в переменную $content
$content = ob_get_contents();
?>

<?php
$file_tmp = 'tmp_file.txt';


// Пишем содержимое буфера в файл
file_put_contents($file_tmp, $content);
?>

<form action="save_file.php" class="">
	<p><input type="submit", value="Сохранить файл в Excel" /></p>
</form>