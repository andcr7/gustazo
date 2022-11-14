<?php
$mysqli = new mysqli("localhost", "root", "", "gustazo");

$productos = [];

$result = $mysqli->query("SELECT * FROM `productos`");

$row_cnt = $result->num_rows;

if ($row_cnt > 0) {
    $productos = $result;
    return $productos;
    // header("location: /gustazo/html/comidas.php");
    exit;
} else {
    echo mysqli_num_rows($ejecutar);
}

mysqli_close($connection);
