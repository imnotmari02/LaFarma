<?php
include("conexion.php");

session_start();
$ced=$_SESSION["id_usuario"];
if (isset($_SESSION["usuario"])){
 }else {
	header("Location: login.html");
	exit();
}

$pass1=$_POST["clave1"];
$pass2=$_POST["clave2"];
if ($pass1==$pass2){
	mysqli_query($conexion, "UPDATE usuarios SET password='$pass2' WHERE id_usuario='$ced'") or die(mysqli_error());
	header("Location: login.html");

}else{

	header("Location:cambiar.php");

	exit();
}
?>