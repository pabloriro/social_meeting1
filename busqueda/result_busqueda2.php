<?php  

include("../sql/conectar.php");

session_start();

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
          <td style="vertical-align: top;" width="150px"><center><h4><a href="busqueda2.php">Volver a Buscar</a><br><br><br></h4></center><br>
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
                                   $sql= "SELECT a.nombre, b.descripcion, b.iddato FROM usuario a, datos b WHERE a.id_usuario=b.id_usuario and a.nombre LIKE '%$buscar%'";

                                   $resultado = $conn->query($sql);
                                                           
                                   while ($row=$resultado->fetch_assoc()) {

                                   ?>
                         <tr>
                                      <td><?php echo $row['nombre'];  ?></td>
                                      <td><?php echo $row['descripcion'];?></td>
                                      <td><a class="perfil" href="perfilbusqueda.php?id=<?php echo $row['iddato']?>"><input name="perfil_si" type="button" value="Perfil"></a>
                                        </td>                               
                         </tr>
                    <?php } 

                    ?>   
                    </tbody>
               </table>
          </center>          
          </td>
          <td>
            <center><h3><a href="../usuario/perfil.php">Perfil</a><br><br><br><a href="../muro/muro.php">Muro de Propuestas</a></h3></center>
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