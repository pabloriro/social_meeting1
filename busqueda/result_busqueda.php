<?php  

include("../sql/conectar.php");

?>

<!DOCTYPE html>
<html>
<head>
      <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
     <title></title>
</head>
<body background="../imagenes/fondo_verde.jpg", style="font-family: Verdana; font-size:25; background-repeat: no-repeat; background-position: center center fixed; background-size: cover">
 <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
     <tbody>
          <tr>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Resultados de la búsqueda</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><center><h4><a href="../index.php">Volver a Buscar</a></h4></center><br>
          </td>
          </tr>
            <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><br><br><center>
               <table border="1" style="text-align: left; width: 100%;" cellpadding="2" cellspacing="2">
                    <tbody>
                         <tr>
                              <th style="width: 100px">Nombre</th>
                              <th style="width: 600px">Descripción</th>
                              <th style="width: 100px"></th>
                         </tr>
                         <?php
                                   $buscar=$_POST['buscar'];
                                   $sql= "SELECT a.nombre, b.descripcion FROM usuario a, datos b WHERE a.id_usuario=b.id_usuario and a.nombre LIKE '%$buscar%'";

                                   $resultado = $conn->query($sql);
                                                           
                                   while ($row=$resultado->fetch_assoc()) {
                                   ?>
                         <tr>
                                      <td><?php echo $row['nombre'];  ?></td>
                                      <td><?php echo $row['descripcion'];?></td>
                                      <td><input name="perfil_no" type="button" onclick='alert("Debes registrarte para ver perfiles. Vuelve a la página de inicio")' value="Perfil" />
                              </td>                               
                         </tr>
                    <?php } ?>   
                    </tbody>
               </table>
          </center>          
          </td>
          <td>
          </td>
          </tr>
          <tr>
            <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
          </tr>
     </tbody>
 </table>
</body>
</html>