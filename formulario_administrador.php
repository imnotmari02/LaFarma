<?php
/*
session_start();
if (isset($_SESSION["nombre"]) && ($_SESSION["tipo"]=='admin' )) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location: login.html");
//salimos de este script
exit();
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/medicamento.svg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/for_admin.css">
    <title>Document</title>
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
<div class="je">
    <form action="registrar_roles.php" method="POST" class="formm">
    <br>
    <p class="b">Nombre completo <input class="a" type="text" name="nombre" placeholder="ingrese nombres y apellidos"></p>
    <p class="b">Usuario <input class="a" type="text" name="usuario" placeholder="cree un usuario"></p>
    <p class="b">Contraseña <input class="a" type="password" name="clave" placeholder="cree una contraseña"></p> 
    <br>
    <select name="tipo" class="a">
        <option value="user">Usuario</option>
        <option value="admin">Administrador</option>
        

    </select>
    <br>

     <input class="v" type="submit" value="Registrarse" name="">
    <p class="c">Al registrarse aceptas nuestras politicas de uso y politicas de privacidad</p>
    <p class="c">¿Ya tienes una cuenta?</p>
    <p class="c"><a href="login.html">Inicia sesion</a></p>
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