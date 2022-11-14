<?php
include '../obtener_registro.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <h1>Perfil</h1>
    <form action="../actualizar_registro.php" method="post">
        <h2>Actualizar registro</h2>
        <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ?? '' ?>">
        <input type="text" placeholder="Nombre completo" name="full_name" value="<?php echo $registro['nombre_completo']; ?> ">
        <input type="email" placeholder="Correo Electrónico" name="email" value="<?php echo $registro['correo']; ?> ">
        <input type="text" placeholder="Usuario" name="user" value="<?php echo $registro['usuario']; ?> ">
        <input type="password" placeholder="Contraseña" name="password">
        <button>Actualizar</button>
    </form>

    <form action="../eliminar_registro.php" method="post">
        <h2>Eliminar registro</h2>
        <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'] ?? '' ?>">
        <button>Eliminar</button>
    </form>
</body>

</html>