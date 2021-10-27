<?php 

$conexion = mysqli_connect('localhost','root','','farmacia');

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="assets/medicamento.svg" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo5.css">
  <title> Mostrar usuarios </title>
</head>
<body>
  <div class="container">
        <div class="nav-">
            <li><a href="../Farmacia/index_admin.html"><img class="logo1" src="assets/logofar.png"></a></li>
                    <li>
                    <form action="search.php" method="get" class="logo6">
                    <input class="inputt" type="search" name="q" placeholder=" Que deseas encontrar?" required="required"> <button type="submit"><img class="logo5" src="assets/logo5.png"></button>
                    </form>
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
  <h3> Mostrar Registros </h3>
<div class="contenedor_principal">
<table> 
     <thead>
     <tr>
      <td> Id_usuario </td>
      <td> Nombre </td>
      <td> Usuario </td>
      <td> Contraseña </td>
        <td> Tipo de usuario </td>
     </tr>
   </thead>
   <?php 

      $consulta = "SELECT * FROM usuarios";
      $resultado = mysqli_query($conexion,$consulta);

     while($mostrar = mysqli_fetch_array($resultado)){
   ?>

       <tr>
      <td> <?php echo $mostrar['id_usuario']?> </td>
      <td> <?php echo $mostrar['nombre']?> </td>
      <td> <?php echo $mostrar['usuario']?> </td>
      <td> <?php echo $mostrar['password']?> </td>
        <td> <?php echo $mostrar['tipo']?> </td>
     </tr>

  <?php  
        }
  ?>

</table>



<a class="button" href="mostrar_acciones.php">ACCIONES </a>
<a class="button" href="reportes.php">GENERAR PDF</a>
<a class="button" href="index_admin.html"> VOLVER PANEL</a>
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