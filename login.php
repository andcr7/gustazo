<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>inicio de sesion / Registro de personas</title>
</head>
<body>
        <main>
            <div>
                <div>
                    <div>
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesion para entrar en la pagina</p>
                        <button id="btn__iniciar-sesion">Inicar sesion</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesion</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div> 
                </div>

                <!--Fomulario de Login y registro-->
                <div>
                    <!--Login-->
                    <form action="../valida_login.php" method="POST" class="formulario__login">
                        <h2>Iniciar sesion</h2>
                        <input type="email" placeholder="Correo Electrónico" name="email">
                         <input type="password" placeholder="Contraseña" name="password">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="../registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contraseña">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>

        </main>
</body>
</html>




