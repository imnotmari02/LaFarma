<?php 

include "conexion.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$insertar = "INSERT INTO usuarios(nombre,usuario,clave)VALUES('$nombre','$usuario','$clave')";

$verificar = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario = $usuario")

if(mysql_new_rows($verificar) > 0) {
    echo '<script>
            alert("el ususario ya se encuentra registrado");
            window.history.go(-1);
            </script>';
            exit();
}

$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
    echo '<script> alert("se registro correctamente");
    header("location:login.html");
    <script>';
}
else{
    echo "Hay problemas en la insercion de registros";
}
mysql_close($conexion);
?>