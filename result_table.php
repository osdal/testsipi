<table>
	<tr>
		<th>№</th>
		<th>Название проверки</th>
		<th>Статус</th>
	</tr>
	<tr><th></th><th></th><th></th></tr>
	<tr>
	<th>1</th>
	<td>Проверка наличия файла robot.txt</td>
	<th>
		<?php if (!$resultfile == false){
			echo '<th>Ошибка</th>';}
		else {
			echo '<th>Ок</th>';
			echo "$resultfile 111";
		}?>
	</tr>
</table>