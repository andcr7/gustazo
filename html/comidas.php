<?php
include '../listado_productos.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/comidas.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo">LOGO</a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="../index.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="./menu.html" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="./reservaciones.html" class="nav-link ">Reservaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Comidas</a>
                    </li>
                    <li class="nav-item">
                        <a href="./contacto.html" class="nav-link ">Contacto</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                    <span class="fil">C</span>omidas Rapidas
                </h2>
                <h1 class="head">El Gustazo</h1>
            </div>
        </div>
    </section>

    <section>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($productos as $producto) {
                        echo '
                        <tr>
                            <td>' . $producto["id"] . '</td>
                            <td>' . $producto["nombre"] . '</td>
                            <td>' . $producto["cantidad"] . '</td>
                            <td>' . $producto["valor"] . '</td>
                        </tr>';
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="../img/salchipapa.jpg" alt="">
                    <img src="../img/salvajada.jpg" alt="" : width="52" height="175">
                    <img src="../img/hamburguesa.jpg" alt="">
                    <img src="../img/perro caliente.jpg" alt="" : width="52" height="175">
                    <img src="../img/pollo frito.jpg" alt="">
                    <img src="../img/pizza.jpg" alt="" : width="52" height="173">
                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">T</span>egusta el
                        </h2>
                        <h1 class="head hea-dark">Delisioso menu</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        En Esta Sesion Encontraras Comidas Rapidas Como
                        La Salchipapa , La Salvajada , La Pizza , El Perro
                        Caliente , El Pollo Frito , La hamburguesa etc.
                        Espero Les Guste Nuestra Comida Que Se Hace Con
                        Mucho Amor Y Dedicacion.
                    </p>
                    <a href="./reservaciones.html" class="btn cta-btn">Has una reservacion</a>
                </div>

            </div>
        </div>
    </section>

</body>

</html>