<?php 

include("conexion.php");

$nombre= $_POST['nombre'];
$usuario= $_POST['usuario'];
$clave= $_POST['clave'];
$user='user';

$insertar = "INSERT INTO usuarios(nombre,usuario,password,tipo) VALUES('$nombre','$usuario','$clave','$user')";

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

<a href="login.html"> Ingresar al login </a>

