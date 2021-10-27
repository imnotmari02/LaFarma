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

<!DOCTYPE html>
<html lang="es">
<head>
	<title> Mostrar Registros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo7.css">
</head>
<body>

<nav>
	<h2> Mostrar Registros para realizar acciones </h2>
</nav>
<?php 

include "conexion.php";

?>

<table>
	<tr>
		<th>Nombre</th>
		<th>Usuario </th>
		<th>Password</th>
		<th>Tipo_user</th>
		<th colspan="2">Botones de Accion</th>
	</tr>
    <tbody>
    	<?php 
        $registros= mysqli_query($conexion, "SELECT * FROM usuarios") or die("Problemas en el select".mysqli_error($conexion));
          
          while ($row = mysqli_fetch_array($registros)) { ?>
          	<tr>
		      
		      <td><?php echo $row['nombre']?></td>
		      <td><?php echo $row['usuario']?></td>
		      <td><?php echo $row['password']?></td>
		      <td><?php echo $row['tipo']?></td>
		      <td> 
                 <a href="modificar.php?edit=<?php echo $row['id_usuario']?>" class="edit_btn"> Editar </a>
		      </td>
		      <td> 
                 <a href="eliminar.php?del=<?php echo $row['id_usuario']?>" class="del_btn"> Eliminar </a>
		      </td>
	        </tr>
        <?php  } ?>
     </tbody>

</table>

<center><a class="button1" href="mostrar_usuarios.php">Volver al Panel</a></center>
</body>
</html>