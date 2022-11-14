<?php
$mysqli = new mysqli("localhost", "root", "", "gustazo");

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$password = hash('sha512', $password);

$result = $mysqli->query("SELECT * FROM registros WHERE correo='$email' AND contrasena='$password'");
$row_cnt = $result->num_rows;

if ($row_cnt > 0) {
     $id = '';
     foreach ($result as $el) {
          $id = $el["id"];
     }
     echo '
     <script>
          localStorage.setItem("userId", ' . $id . ');
          window.location.href = "/gustazo/index.php";
     </script>
     ';
     // header("location: ./index.php");
     exit;
} else {
     echo '
        <script>
             alert ("Usuario no existe, por favor verifique los datos introducidos");
             window.location.href = "/gustazo/html/reservaciones.html";
        </script>
   ';
     exit;
}
