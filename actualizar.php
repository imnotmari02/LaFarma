<?php
session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo"]=='admin' )) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location:login.html");
//salimos de este script
exit();
}

?>

<?php 

include "conexion.php";

$codigo = $_POST['codigo'];

mysqli_query($conexion, "UPDATE usuarios SET nombre='$_POST[nombre]', usuario='$_POST[usuario]', password ='$_POST[password]', tipo='$_POST[tipo]' WHERE id_usuario = '$codigo'") or die(" Problemas en la actualizacion".mysqli_error($conexion));
    header("location:mostrar_acciones.php");


?>