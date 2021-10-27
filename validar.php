<?php 

include("conexion.php");

$usuario= $_POST['usuario'];
$clave= $_POST['clave'];


$admin=mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$clave' && tipo='admin'");
$usu=mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$clave' && tipo='user'");

if (mysqli_num_rows($admin)>0){
		$fila=mysqli_fetch_row($admin);
		$ced=$fila[0];
		$name=$fila[1];
		$usuario = $fila[2];
		$tipo=$fila[4];
		session_start();
		$_SESSION['id_usuario']="$ced";
		$_SESSION['nombre']="$name";
		$_SESSION['usuario'] = "$usuario";
		$_SESSION['tipo']="$tipo";
			 
		
		header("Location:index_admin.html");

	}elseif (mysqli_num_rows($usu)>0){
		$fila=mysqli_fetch_row($usu);
		$ced=$fila[0];
		$name=$fila[1];
		$usuario = $fila[2];
		session_start();
		$_SESSION['id_usuario']="$ced";
		$_SESSION['nombre']="$name";
		$_SESSION['usuario']="$usuario";

		header("Location:index_user.html");
	}else{
		echo '<script language="javascript">alert("Error de autentificacion");window.location.href="login.html"</script>';
		//header("Location: index.html");
	}

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location:usuario.php");
}else{
	echo '<script languaje="javascript">alert("ERROR de autentificación");window.location.href="login.html"</script>';

mysql_free_result($resultado);
mysql_close($conexion);

}	 



 /*
mysql_free_result($resultado);
mysql_close($conexion);*/
?>
