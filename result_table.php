<?php include 'header.php';
	  include 'text_variables.php'; 
	  ?>
<table border="1px" cellspacing="0" width="80%">
	<tr>
		<th>№</th>
		<th>Название проверки</th>
		<th>Статус</th>
	</tr>
	<tr class="cell_heigt"><th>
	<tr>
		
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
	</tr>
	<tr></tr>
</table>