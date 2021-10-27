<?php
session_start();
if (isset($_SESSION["nombre"])) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location: login.html");
//salimos de este script
exit();
}

?>

<!DOCTYPE html>


<html>
<head>
	<title></title>
  <link rel="stylesheet" href="css/estilo4.css">
</head>
<body>

<header class="header">
	<div class="container">
		       <div class="logo">
               <h1>LOGO</h1>
           </div>
           <nav class="menu">
           	     <ul>
                   <li><a href="#">Inicio</a></li>
                   <li><a href="#">Servicios</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">

                       <li><a href="cambiar.php"> Cambiar contraseña  </a></li>
                       <li><a href="frm_buscar_usuario.php"> Buscar usuarios </a></li>
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
	</div>

</header>
<br>
<br>
<br>
<br>
<br>
<br>
<h1> hola Usuario;</h1>

<?php
  echo $_SESSION['nombre'];
  echo "<br>";
  echo $_SESSION['usuario'];
  echo "<br>";
 echo "<br> Es Usuario";

?>


</body>
</html>