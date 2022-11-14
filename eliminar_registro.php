<?php
$mysqli = new mysqli("localhost", "root", "", "gustazo");

$user_id = $_POST['user_id'];
//encriptamiento de contraseñas//
$password = hash('sha512', $password);

$query = "DELETE FROM registros WHERE id = '$user_id'";

$ejecutar = $mysqli->query($query) === TRUE;

if ($ejecutar) {
    echo '
            <script>
                localStorage.clear();
                alert("usuario eliminado exitosamente");
                window.location.href = "/gustazo";
            </script>
        ';
} else {
    echo '
        <script>
             alert("intente de nuevo, usuario no eliminado");
             window.location.href = "/gustazo/index.php";
       </script>
    ';
}

$mysqli->close();
