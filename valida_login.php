<?php
include './db_connection.php';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$password = hash('sha512', $password);

$validar_login = mysqli_query($connection, "SELECT * FROM registros WHERE correo='$email' AND contrasena='$password'");
if (mysqli_num_rows($validar_login) > 0){
     header("location: ./index.php");
     exit;
}else{
   echo '
        <script>
             alert ("Usuario no existe, por favor verifique los datos introducidos");
             window.location.href = "/gustazo/html/reservaciones.html";
        </script>
   ';
   exit;
}
?>