<?php
	require_once("../core/controler_users.php");

	$usua=$_POST["usua"];
	$contra=$_POST["contra"];

	$usuario=new usuario();
	$usuario->get($usua,$contra);

	if($usua==$usuario->usua&&$contra==$usuario->contrasenia)
	{
		?>
		<script type="text/javascript">
		alert("bienvenido");
		</script>
		<?php
	}

	else
	{
		?>
		<script type="text/javascript">
		alert("No encontrado");
		</script>
		<?php
	}
?>