	<?php
	$con=mysql_connect('localhost','root');
	mysql_query("SET NAMES 'utf8'");
	if(!$con){
		die('No es posible conectar con la base de datos'.mysql_error());
	}
	$db_selected=mysql_select_db('pelu',$con);
	?>