<?php 

/*session_start();
if (isset($_SESSION["nombre"]) && ($_SESSION["tipo"]=='admin' )) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location: login.html");
//salimos de este script
exit();
}*/

include("conexion.php");

$nombre= $_POST['nombre'];
$usuario= $_POST['usuario'];
$clave= $_POST['clave'];
$tipo = $_POST['tipo'];

$insertar = "INSERT INTO usuarios(nombre,usuario,password,tipo) VALUES('$nombre','$usuario','$clave','$tipo')";

$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0 ) {
	echo '<script> 
	      alert("el usuario ya se encuentra registrado");
	      window.history.go(-1);
      	</script>';
	exit();   
}

$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
	echo '<script> alert("se ingreso correctamente");
	      header("location:login.html");
         </script>';
         
	}else{
		echo "hay problemas en la insercion de registros";
	}

	mysqli_close($conexion);
?>

<a href="login.html" style="font-size: 20px; font-family: arial; color: #86CAEF; list-style: none; text-decoration: none;"> Ingresar al login </a>