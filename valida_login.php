<?php
include './db_connection.php';
$Correo = $_POST['Correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM registros WHERE Correo='$Correo' AND contrasena='$contrasena'");
if (mysqli_num_rows($validar_login) > 0){
     header("location: ./index.php");
     exit;
}else{
   echo '
        <script>
             alert ("Usuario no existe, por favor verifique los datos introducidos");
             "window.location = ./login.php";
        </script>
   ';
   exit;
}
?>