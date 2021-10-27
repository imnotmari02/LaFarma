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

if (!empty($_POST)) {
	$cod_mas = $_POST['codi'];
	$query_borrar = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_usuario = '$cod_mas'");
	if ($query_borrar) {
		header("location:mostrar_acciones.php");
	}else{
		echo "Error al eliminar el registro";
	}
}


$del = $_GET['del'];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$del'") or die("problemas en el select".mysqli_error($conexion));

while ( $row =mysqli_fetch_array($resultado) ) {
	$codigo = $row['id_usuario'];
	$nombre = $row['nombre'];
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title> Eliminar registro </title>
	<link rel="stylesheet" type="text/css" href="css/estilo9.css">
	
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/medicamento.svg" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
</head>
<body>
	 <div class="container">
        <div class="nav-">
            <li><a href="../Farmacia/index.html"><img class="logo1" src="assets/logofar.png"></a></li>
                    <li>
                    <div action="search.php" method="get" class="logo6">
                    <input class="inputt" type="search" name="q" placeholder=" Que deseas encontrar?" required="required"> <button type="submit"><img class="logo5" src="assets/logo5.png"></button>
                    </div>
                    </li>
            <nav>
                <ul>    
                    </li>
                    <li><a class="one" href="../Farmacia/login.html">Cerrar Sesión</a></li>
                    <li><a href="../Farmacia/carrito.html"><img class="logo3" src="assets/logo2.png"></a></li>
                </ul>
           </nav>
        </div>    
    </div>
    <header class="header" id="inicio">

        <img src="assets/menu.png" alt="" class="init">

        <nav class="menu">
            <a href="../Farmacia/index.html#inicio">Inicio</a>
            <a href="../Farmacia/index.html#novedades">Novedades</a>
            <a href="../Farmacia/index.html#aulas">Productos</a>
            <a href="../Farmacia/index.html#descarga">Formas de pago</a>
            <a href="../Farmacia/index.html#contacto">Conocenos</a>
        </nav>
    </header>
  
<br>
<br>
<div class="je">
<h2 class="h"> Eliminar registros</h2>
<form class="formm" method="post" action="">
	<div class="box"><p>Estas seguro que desea eliminar el registro</p>
    <?php  echo "con el codigo ".$codigo." y cuyo nombre es: ".$nombre.""; ?>
    </div> <br>
    <input type="hidden" name="codi" value="<?php echo $del;?>">
	<input type="submit" value="Aceptar" class="v">
	

<button type="submit" name="cancelar" class="v"><a href="mostrar_acciones.php" style="text-decoration: none;"> Cancelar </a></button>
</form>	
</div>
<footer id="contacto">
        <div class="footer-content">
            <div class="contact-us">
                <h1 class="brand">CONTACTANOS</h1>
                <h2><a href="https://api.whatsapp.com/send/?phone=573187421443&text&app_absent=0" class="wpp">+57 318 742 1443</a></h2>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/la.farma.94" target="_blank" class="social-media-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="https://www.instagram.com/droguerialafarma/" target="_blank" class="social-media-icon">
                    <i class='bx bxl-instagram-alt'></i>
                </a>

            </div>


        </div>

        <div class="line"></div>
        
    </footer>
 
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>

</body>
</html>