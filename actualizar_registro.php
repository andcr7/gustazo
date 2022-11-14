<?php
$mysqli = new mysqli("localhost", "root", "", "gustazo");

$user_id = $_POST['user_id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
//encriptamiento de contraseñas//
$password = hash('sha512', $password);

$query = "UPDATE registros SET nombre_completo = '$full_name', correo = '$email', usuario = '$user', contrasena = '$password' WHERE id = '$user_id'";

$ejecutar = $mysqli->query($query) === TRUE;

if ($ejecutar) {
    echo '
            <script>
                alert("usuario actualizado exitosamente");
                window.location.href = "/gustazo"
            </script>
        ';
} else {
    echo '
        <script>
             alert("intente de nuevo, usuario no actualizado");
             window.location.href = "/gustazo/index.php";
       </script>
    ';
}

$mysqli->close();
