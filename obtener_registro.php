<?php
$mysqli = new mysqli("localhost", "root", "", "gustazo");

$id = $_GET['user_id'] ?? '';

$result = $mysqli->query("SELECT * FROM `registros` WHERE id = '$id'");

$row_cnt = $result->num_rows;

if ($row_cnt > 0) {
    $registro;
    foreach ($result as $el) {
        $registro = $el;
    }
    return $registro;
    // header("location: /gustazo/html/comidas.php");
    exit;
} else {
    echo '
    <script>
        alert("intente de nuevo, usuario no encontrado");
        window.location.href = "/gustazo/html/reservaciones.html";
    </script>
    ';
}

mysqli_close($connection);
