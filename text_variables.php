
<?php


$error_robot_txt = '<th rowspan="2">1</th>
					<td rowspan="2">Проверка наличия файла robot.txt</td>
					<th rowspan="2" class="error_cell ">Ошибка</th>
					 <td>Состояние</td>
					 <td>Файл robot.txt отсутствутет</td>
					 <tr>
					 <td>Рекомендации</td>
					 <td>Программист: Создать файл robot.txt и  разместить его на сайте</td>
					 </tr>';

$ok_robot_txt = '<th rowspan="2">1</th>
				 <td rowspan="2">Проверка наличия файла robot.txt</td>
				  <th rowspan="2" class="ok_cell">Ok</th>
			 	  <td>Состояние</td>
			      <td>Файл robot.txt присутствутет</td>
			      <tr>
			      <td>Рекомендации</td>
			      <td>Доработки не требуется</td>
			      </tr>
			      </tr>
				  <tr>';

$Host_ok = '<th rowspan="2">2</th>
			<td rowspan="2">Проверка указания директивы Host</td>
			<th rowspan="2" class="ok_cell">
			Ok</th>
			<td>Состояние</td>
		    <td>Директива Host указана</td>
		    <tr>
		    <td>Рекомендации</td>
		    <td>Доработки не требуется</td>
		    </tr>';

$Host_num_ok = '<tr>
				<th rowspan="2">3</th>
				<td rowspan="2">Проверка количества директив Host прописанных в файле</td>
				<th rowspan="2" class="ok_cell">
				Ok</th>
				<td>Состояние</td>
			    <td>В файле прописана 1 директива Host</td>
			    <tr>
			    <td>Рекомендации</td>
			    <td>Доработки не требуется</td>
				</tr>';

$error_Host_num = '<tr>
					<th rowspan="2">3</th>
					<td rowspan="2">Проверка количества директив Host прописанных в файле</td>
					<th rowspan="2" class="error_cell">
					Ошибка</th>
					<td>Состояние</td>
				    <td>В файле прописана несколько директив Host</td>
				    <tr>
				    <td>Рекомендации</td>
				    <td>Программист. Директива Host должна быть указана в файле только 1 раз. Необходимо удалить все дополнительные директивы Host и оставить только 1 корректную и соответствующую основному зеркалу сайта.</td>
					</tr>';

$error_Host = '<th rowspan="2">2</th>
				<td rowspan="2">Проверка указания директивы Host</td>
				<th rowspan="2" class="error_cell">
				Ошибка</th>
				<td>Состояние</td>
			    <td>В файле robot.txt не указана директива Host</td>
			    <tr>
			    <td>Рекомендации</td>
			    <td>Программист: Для того, чтобы поисковые системы знали какая версия сайта является основным зеркалом, необходимо прописать  адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо добавить в файл robot.txt директиву Host. Директива Host задается в файле 1 раз после всех правил</td>
			    </tr>';

$size_robot_txt_ok = "<tr>
						<th rowspan=\"2\">4</th>
						<td rowspan=\"2\">Проверка размера файла robot.txt</td>
						<th rowspan=\"2\" class=\"ok_cell\">
						Ок</th>
						<td>Состояние</td>
					    <td>Размер файла robot.txt составляет $file_size байт, что находится в пределах допустимой нормы</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Доработка не требуется</td>
						</tr>";

$error_size_robot_txt = "<tr>
						<th rowspan=\"2\">4</th>
						<td rowspan=\"2\">Проверка размера файла robot.txt</td>
						<th rowspan=\"2\" class=\"error_cell\">
						Ошибка</th>
						<td>Состояние</td>
					    <td>Размер файла robot.txt составляет $file_size байт, что превышает допустимую норму</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Программист: Максимально допустимій размер файла robot.txt составляет 32 кб. Необходимо отредактировать файл robot.txt таким образом, чтобы его размер не превышал 32 кб</td>
						</tr>";

$ok_sitemap = 			'<tr>
						<th rowspan="2">5</th>
						<td rowspan="2">Проверка указания директивы Sitemap</td>
						<th rowspan="2" class="ok_cell">
						Ок</th>
						<td>Состояние</td>
					    <td>Директива Sitemap указана</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Доработка не требуется</td>
						</tr>';

$error_sitemap = 		'<tr>
						<th rowspan="2">5</th>
						<td rowspan="2">Проверка указания директивы Sitemap</td>
						<th rowspan="2" class="error_cell">
						Ошибка</th>
						<td>Состояние</td>
					    <td>В файле robot.txt не указана директива Sitemap</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Ппрограммист: Добавить в файл robot.txt директиву Sitemap</td>
						</tr>';

$response_code_ok = 	'<tr>
						<th rowspan="2">6</th>
						<td rowspan="2">Проверка кода ответа сервера для файла robot.txt</td>
						<th rowspan="2" class="ok_cell">
						Ок</th>
						<td>Состояние</td>
					    <td>Файл robot.txt отдает код ответа сервера 200</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Доработка не требуется</td>
						</tr>';

$error_response_code =  "<tr>
						<th rowspan=\"2\">6</th>
						<td rowspan=\"2\">Проверка кода ответа сервера для файла robot.txt</td>
						<th rowspan=\"2\" class=\"error_cell\">
						Ошибка</th>
						<td>Состояние</td>
					    <td>При обращении к файлу robot.txt сервер возвращает код ответа $response_code</td>
					    <tr>
					    <td>Рекомендации</td>
					    <td>Программист: Файл robot.txt должен отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо настроить сайт таким образом, чтобы при обращении к файлу robot.txt серев возвращал код ответа 200</td>
						</tr>";

