<?php

include("conectar.php");

session_start();

               $nom = $_POST['nom'];
               $pre = $_POST['pres'];
               $prone = $_POST['pro'];
               $equi = $_POST['equi'];
               $cli = $_POST['cli'];
               $ref= $_POST['ref'];
               $time = $_POST['time'];
               $plazo= $_POST['plazo'];

               $sql = "INSERT INTO propuestas (nombrep, presentacion, pro_ne, equipo, clientes, refe, tiempo, plazo, fech) VALUES ('$nom', '$pre', '$prone','$equi','$cli','$ref', '$time', '$plazo', NOW())";

               $result=$conn->query($sql);

               if ($result) 
               {
               header("Location:../propuesta/pro_enviada.php");
               }else{
               header("Location:../propuesta/pro_mala.php");
               }

               $conn->close(); 
               ?>

