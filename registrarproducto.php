<?php
        if ($_POST){
            $nom = $_POST['txtnombreproducto' ];
            $pr = $_POST['txtprecioproducto' ];
            $tip = $_POST['txttipo'];
            require_once('db_connection.php');
            $db_connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql='INSERT INTO productos (nombreproducto, precioproducto, tipo) VALUES
                (:n, :p, :t)';
            $stmt = $db_connection->prepare($sq1);
            $stmt->bindParam("n", $nom);
            $stmt->bindParam("p", $pr);
            $stmt->bindParam("t", $tip);
            $stmt->execute();
            print ("<script> alert('Registro guardado con éxito');</script>");
        }
        
?>