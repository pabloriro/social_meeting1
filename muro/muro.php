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
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Muro</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../usuario/cerrar.php"> Cerrar sesión</a></h4>
          </td>
 		</tr>
 		  <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center>
          	<table border="0" style="text-align: left; width: 100%;" cellpadding="2" cellspacing="2">
          		<tbody>
          			<tr><td><center><h4>Solicitudes de Propuestas</h4>
                              <h5>Escribiendo en el muro podrás informar a otros usuarios que estás recibiendo propuestas para los servicios que necesites. Ten en cuenta que cada propuesta tiene un tiempo de validez de 2 semanas</h5>
                              <form method="post" action="../sql/enviarsol_sql.php"><textarea style="width: 80%" cols="2" placeholder="Solicita propuestas..." name="solpro"></textarea>
                                   <br><input type="submit" name="enviarm" value="Enviar Solicitud"></form>
          			<br><tr><td>
          				<table  border="1" style="text-align: left; width: 100%;" cellpadding="2" cellspacing="2">
          					<tbody>
          						<tr>
          							<td style="width: 100px"><strong>Nombre</strong></td>
          							<td style="width: 800px"><strong>Propuesta</strong></td>
                                             <td style="width: 100px"><strong>Fecha</strong></td>
                                             <td style="width: 100px"><strong>Perfil</strong></td>
          						</tr>
                                              <?php
                                             
                                             $sql= "SELECT a.nombre, b.pro, b.fech, c.iddato FROM usuario a, sol_pro b, datos c  WHERE a.id_usuario=b.id_usuario and a.id_usuario=c.id_usuario";

                                             $resultado = $conn->query($sql);
                                                                     
                                             while ($row=$resultado->fetch_assoc()) {

                                        ?>
                               <tr>
                                      <td><?php echo $row['nombre'];  ?></td>
                                      <td><?php echo $row['pro'];?></td>
                                      <td style="width: 200px"><?php echo $row['fech'];?></td>
                                      <td><a class="muro" href="perfilmuro.php?id=<?php echo $row['iddato']; ?>"><input name="perfil_si" type="button" value="Perfil"></a>
                                        </td>  <?php } 

                    ?>                               
                         </tr>
                     
          					</tbody>
          				</table>
          			</td></tr>
          		</tbody>
          	</table>
          </center>          
          </td>
          <td style="vertical-align: top;" width="150px"><h4><a href="../usuario/perfil.php">Perfil</a></h4>
          </td>
 		</tr>
 		</tr>
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