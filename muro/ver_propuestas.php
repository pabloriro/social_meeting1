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
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Propuestas</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../usuario/cerrar.php"> Cerrar sesión</a></h4><br><br>
          </td>
 		</tr>
 		  <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><br><br><center>
          	<table border="1" style="text-align: left; width: 100%;" cellpadding="2" cellspacing="2">
          		<tbody>
          			<tr>
                              <center><h3>Recibidas</h3></center>
                              <td style="width: 100px"><strong>Autor</strong></td>
                              <td style="width: 700px"><strong>Nombre de Propuesta</strong></td>
                              <td></td>
                         </tr>
                              <?php

                                  $ids = $_SESSION['id_us'];

                                   $sql= "SELECT a.nombre, b.nombrep, b.id_propuesta FROM usuario a, propuestas b WHERE a.id_usuario=b.id_usuario and b.dest = $ids";

                                   $resultado = $conn->query($sql);
                                                           
                                   while ($row=$resultado->fetch_assoc()) {
                                   ?>
                         <tr>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['nombrep'];?></td>
                                      <td><a class="recibido" href="../propuesta/propuesta.php?pd=<?php echo $row['id_propuesta']?>"><input name="ver_pro" type="button" value="Ver"></a>
                              </td>                               
                         </tr>
                    <?php }

                     ?>   
                              
                         </tr>
          		</tbody>
          	</table>
          </center>         
          </td>
          <td style="vertical-align: top;" width="150px"><br><br></b><h4><a href="../usuario/perfil.php">Perfil</a></h4><br><br><h4><a href="muro.php">Ingresa al muro</a></h4>
          </td>
 		</tr>
 		<tr>
 		  <td style="vertical-align: top;" width="150px"><br><br><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><table border="1" style="text-align: left; width: 100%;" cellpadding="2" cellspacing="2">
                    <tbody>
                         <tr>
                              <center><h3>Enviadas</h3></center>
                              <td style="width: 100px"><strong>Autor</strong></td>
                              <td style="width: 700px"><strong>Nombre de Propuesta</strong></td>
                              <td style="width: 100px"></td>
                         </tr>
                          <?php
                                   $ids = $_SESSION['id_us'];

                                   $sql= "SELECT a.nombre, b.nombrep, b.id_propuesta FROM usuario a, propuestas b WHERE a.id_usuario=b.id_usuario and b.id_usuario = $ids";

                                   $resultado = $conn->query($sql);
                                                           
                                   while ($row=$resultado->fetch_assoc()) {
                                   ?>
                         <tr>
                                      <td><?php echo $row['nombre']; ?></td>
                                      <td><?php echo $row['nombrep'];?></td>
                                      <td><a class="enviado" href="../propuesta/propuesta_re.php?pd=<?php echo $row['id_propuesta']?>"><input name="ver_pro" type="button" value="Ver"></a>
                              </td>                               
                         </tr>
                    <?php } $conn->close(); ?>   
                    </tbody>
               </table></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
 		</tr>
 	</tbody>
 </table>
</body>
</html>