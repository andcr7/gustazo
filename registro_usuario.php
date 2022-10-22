<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //encriptamiento de contraseñas//
   // $contrasena = hash ('sha512', $contrasena);

   $query = "INSERT INTO registros(nombre_completo, correo, usuario, contrasena)
   VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
   //verificar que el correo no se repita en la base de datos

   $verificar_correo = mysqli_query($conexio, "SELECT * FROM registros WHERE correo='$correo' ");

   if(mysqli_num_rows($verificar_correo) > 0){
       echo'
       <script>
       alert("Este usuario ya esta registrado, intenta con otro diferente");
       window.location = "../login.php";
       </script>
       ';
       exit();
}
      $ejecutar = mysqli_query($conexion, $query);

      if($ejecutar){
          echo '
              <script>
                  alert("usuario almacenado exitosamente");
                  window.location = "../login.php";
              </script>
        ';
    }else{
        echo '
        <script>
             alert("intente de nuevo, usuario no almacenado");
             window.location = "../login.php";
       </script>
    ';
    }

    myqli_close($conexion);
?>

             




