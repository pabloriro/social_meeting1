<?php  

include("../sql/conectar.php");

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
	<title></title>
</head>
<body background="../imagenes/fondo_verde.jpg", style="font-family: Verdana; font-size:25; background-repeat: no-repeat; background-position: center center fixed; background-size: cover">
<table border="0" style="width: 100%; height: 100%">
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<table bgcolor="white" ; style="width:100%; height: 100%; border-collapse: collapse;">
					<tbody>
						<?php 
				                      $user = $_GET['pd'];
				                      $sql= "SELECT a.nombre, b.nombrep, b.presentacion, b.pro_ne, b.equipo, b.clientes, b.refe, b.tiempo, b.plazo, b.fech FROM usuario a, propuestas b WHERE a.id_usuario=b.id_usuario and id_propuesta = $user";

				                      $result = $conn->query($sql);
				                      while ($fila=$result->fetch_assoc()) 
				                        { 

				                          $nombre = $fila['nombre'];
				                          $nombrep = $fila['nombrep'];
				                          $pre= $fila['presentacion'];
				                          $pro_ne = $fila['pro_ne'];
				                          $equipo = $fila['equipo'];
				                          $clientes = $fila['clientes'];
				                          $refe = $fila['refe'];
				                          $tiempo = $fila['tiempo'];
				                          $plazo = $fila['plazo'];
				                          $fech = $fila['fech'];

				                          ?>
						<tr>
							<td style="width: 10%"></td>
							<td style="width: 80%"><center><h3>Propuesta para <?php echo $_SESSION['nom_emp'];?></h3></center></td>
							<td style="width: 10%"></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<table border="1" style="width:100%; height: 100%; border-collapse: collapse;">
									<tbody>
										
										<tr>
											<td style="width: 40%"><center>Autor</center></td>
											<td style="width: 60%"><center><?php echo $nombre;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Nombre</center></td>
											<td style="width: 60%"><center><?php echo $nombrep;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Presentación</center></td>
											<td style="width: 60%"><center><?php echo $pre;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Propuesta de Negocios</center></td>
											<td style="width: 60%"><center><?php echo $pro_ne;?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Equipo de trabajo</center></td>
											<td style="width: 60%"><center><?php echo $equipo;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Clientes Satisfechos</center></td>
											<td style="width: 60%"><center><?php echo $clientes;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Referencias</center></td>
											<td style="width: 60%"><center><?php echo $refe;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Tiempo de Ejecución</center></td>
											<td style="width: 60%"><center><?php echo $tiempo;  ?></center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Plazo para responder</center></td>
											<td style="width: 60%"><center>Puedes responder dentro de <?php echo $plazo;  ?> semanas</center></td>
										</tr>
										<tr>
											<td style="width: 40%"><center>Fecha de envio</center></td>
											<td style="width: 60%"><center><?php echo $fech;  ?></center></td>
										</tr>
										<?php
				                      }
				                      ?>
									</tbody>
								</table>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td><br><br><center><strong>Meeting espera que consideres visitar el perfil de este usuario <br>para contactarse y comenzar una nueva etapa de negocios<br><br>Hasta pronto</strong></center><br><br></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</td>
			<td></td>
		</tr>
		<tr>
			<td><center><a href="../usuario/cerrar.php">Cerrar</a></center></td>
			<td><center><a href="../usuario/perfil.php">Perfil</a></center></td>
			<td><center><a href="../muro/ver_propuestas.php">Buzón</a></center></td>
		</tr>
	</tbody>
</table>
</body>
</html>