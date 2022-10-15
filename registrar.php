<?php
        if ($_POST){            
            $id = $_POST['txtidentificacion' ];
            $nom = $_POST['txtnombres'];
            $apell = $_POST['txtapellidos'];
            $tel = $_POST['txtTelefono' ];
            $dir = $_POST['txtDireccion'];
            $fech = $_POST['txtFecha' ];
            $hora = $_POST['txtHora' ];
            $mot = $_POSTPOST['txtMotivo'];
            $corr = $_POSTPOST['txtcorreo'];
            $contr = $_POSTPOST['txtcontraseña'];
            require_once('db_connection.php');
            $db_connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql='INSERT INTO registros ( identificacion, nombres, apellidos, telefono, direccion, fecha, hora, motivo, correo, contraseña) VALUES
                ( :i, :n, :a, :t, :d, :f, :h, :m, :correo, :contraseña)';
            $stmt = $db_connection->prepare($sq1);
            $stmt->bindParam(":i", $id);
            $stmt->bindParam(":n", $nom);
            $stmt->bindParam(":a", $apell);
            $stmt->bindParam(":t", $tel);
            $stmt->bindParam(":d", $dir);
            $stmt->bindParam(":f", $fech) ;
            $stmt->bindParam (":h", $hora);
            $stmt->bindParam(":m", $mot) ;
            $stmt->bindParam(":correo", $corr) ;
            $stmt->bindParam(":contraseña", $contr) ;
            $stmt->execute();
            print ("<script> alert('Registro guardado con éxito');</script>");
        }
?>