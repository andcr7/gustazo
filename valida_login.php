<?php
include './db_connection.php';
$correo = $_POST['correo'];
$password = $_POST['contrasena'];

$validar_login = mysqli_query($connection, "SELECT * FROM registros
   WHERE correo='$correo' AND contrasena='$password'");
if (mysqli_num_rows($validar_login) > 0) {
   header("location: index.php");
   exit;
} else {
   echo '
           <script>
               alert ("Usuario no existe, por favor verifique los datos introducidos");
               "window.location = login.php";
            </script>
       ';
   exit;
}
