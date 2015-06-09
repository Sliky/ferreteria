  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/es_loguin.css">
<?php session_start();
 	include("conexion.php");
	$usua=$_GET["usua"];
	$contra=$_GET["contra"];
	
	$consulta=mysql_query("select *from usuarios where usuario='".$usua."'and contrasenia='".$contra."'") or die(mysql_error());
	
	if(mysql_num_rows($consulta)>0)
	{
	$_SESSION["usuario"]=$usua;
	?>
		<script type="text/javascript">
		alert('Bienvenido');
		$("#ver_menu").load("views/menuadmin.php");
		$("#contenedor").empty();
        </script>
    <?php

    }
		else
		{		
	?>	
		<script type="text/javascript">
		alert('Sus Datos Son Incorectos');
		$("#usuario").val(""); //limpia caja texto
		$("#contraseña").val("");
        </script>
	<?php
	}
	mysql_close($con);	
	?>