<?php
$connection;
$servidor = 'localhost'; //servidor local
$bd = 'gustazo'; //base de datos
$user = 'root'; // Usuario de MySQL
$pass = ''; // Contraseña de MySQL

$connection = mysqli_connect($servidor, $user, $pass, $bd);
if (!$connection) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_error() . PHP_EOL;
    return;
}
return $connection;

?>
