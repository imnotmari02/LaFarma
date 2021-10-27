<!DOCTYPE html>
<html lang="es">
<head>
  <title> Buscador de usuarios</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/estilo6.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="assets/medicamento.svg" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
        <div class="nav-">
            <li><a href="../Farmacia/index_admin.html"><img class="logo1" src="assets/logofar.png"></a></li>
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
<div class="container-main">
  <form action="frm_buscar_usuario.php" method="post">
    <input type="search" name="dato" placeholder="Ingrese su nombre" class="a">
    <input type="submit" name="buscador" value="Buscar usuario" class="v">  
  
<table class="table-container">
  <thead>
    <tr class="filas">
      <th class="celdas"> Id </th>
      <th class="celdas"> Nombre </th>
      <th class="celdas"> Usuario </th>
      <th class="celdas"> Tipo usuario </th>
     </tr>
  </thead>
</div>
<div class="si">
<?php 

include "conexion.php";

if (isset($_POST['buscador'])) {
  $buscar = $_POST['dato'];
   
 if (empty($buscar)){
  echo "ingrese un dato, el campo esta vacio";

 }else {
  $consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%".$buscar."%'";
  $mostrar = mysqli_query($conexion,$consulta);
  $var_total = mysqli_num_rows($mostrar);

    if ($row = mysqli_fetch_array($mostrar)) {
      echo "Los resultados para esta busquedad son: $buscar";
      echo "<br>";
      echo "El total de datos encontrados fueron: $var_total";
      echo "<br>";
      echo "<br>";
        echo "<hr>";
       do{ 

        ?>

      <tr class="no">
       <td> <?php echo $row['id_usuario']; ?>
       <?php echo "<br>";?></td>
       <td><?php echo $row['nombre']; ?>
       <?php echo "<br>";?> </td> 
       <td> <?php echo $row['usuario']; ?>
       <?php echo "<br>";?></td>
       <td><?php echo $row['tipo']; ?>
       <?php echo "<br>";?> </td> 
       </tr>
       <?php 
 
       }
       while($row = mysqli_fetch_array($mostrar));
       
 }else{
  echo "No se encontraron datos para esta busqueda: $buscar";
 }
}
}

?>
</div>
</table>
</form>
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