<?php
$conexion = null;
$servidor = 'localhost'; //servidor local
$bd = 'gustazo'; //base de datos
$user = 'root'; // Usuario de MySQL
$pass = ''; // Contraseña de MySQL
try{
    $conexion = new POD ('mysql:host='.$servidor.';dbname='.$bd, $user, $pass);
}catch (PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;
?>
