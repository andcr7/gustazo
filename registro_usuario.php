<?php
include './db_connection.php';

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
//encriptamiento de contraseñas//
$password = hash('sha512', $password);

$query = "INSERT INTO registros(nombre_completo, correo, usuario, contrasena)
   VALUES ('$full_name', '$email', '$user', '$password')";
//verificar que el correo no se repita en la base de datos

$verificar_correo = mysqli_query($connection, "SELECT * FROM registros WHERE correo='$email' ");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
       <script>
       alert("Este usuario ya esta registrado, intenta con otro diferente");
       window.location.href = "/gustazo/html/reservaciones.html";
       </script>
       ';
    exit();
}
$ejecutar = mysqli_query($connection, $query);

if ($ejecutar) {
    echo '
              <script>
                  alert("usuario almacenado exitosamente");
                  window.location.href = "/gustazo"
              </script>
        ';
} else {
    echo '
        <script>
             alert("intente de nuevo, usuario no almacenado");
             window.location.href = "/gustazo/html/reservaciones.html";
       </script>
    ';
}

mysqli_close($connection);
