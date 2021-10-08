<?php

include ("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location:index.html");

}else{
	echo '<script language="javascript"> alert("error de autentificacion");window.location.href="login.html";
	 </script>';
}

mysql_free_result($resultado);
mysql_close($conexion);











?>