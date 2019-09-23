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
 		 <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
     <tbody>
          <tr>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Enviar Propuesta</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../usuario/cerrar.php"> Cerrar sesión</a></h4>
          </td>
          </tr>
            <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><br><br><center>
               <form method="post" action="">
                    <table border="1" style="text-align: left;" cellpadding="2" cellspacing="2">
                    <tbody>
                         <tr>
                              <td style="width: 600px" colspan="2"><center><h3>Nueva Propuesta</h3></center></td>
                              
                         </tr>
                         <tr>
                              <td>Nombre de propuesta</td>
                              <td><textarea style="width: 99%" type="text" name="nom" rows="1"></textarea></td>
                         </tr>
                         <tr>
                              <td>Presentación</td>
                              <td><textarea style="width: 99%" type="text" name="pres" rows="5"></textarea></td>
                         </tr>
                         <tr>
                              <td>Propuesta de negocios</td>
                              <td><textarea style="width: 99%" type="text" name="pro" rows="5"></textarea></td>
                         </tr>
                         <tr>
                              <td>Equipo de Trabajo
                              </td>
                              <td><textarea style="width: 99%" type="text" name="equi" rows="5"></textarea></td>
                         </tr>
                         <tr>
                              <td>Clientes Satisfechos:</td>
                              <td><textarea style="width: 99%" type="text" name="cli" rows="5"></textarea><tr>
                            </tr></td>
                              
                         </tr>
                         <tr>
                              <td>Referencias:</td>
                              <td><textarea style="width: 99%" type="text" name="ref" rows="2"></textarea><tr>
                            </tr></td>
                              
                         </tr>
                         <tr>
                              <td>Tiempo de ejecución:</td>
                              <td><textarea style="width: 99%" type="text" name="time" rows="2"></textarea><tr>
                            </tr></td>
                              
                         </tr>
                         <tr>
                              <td>Plazo para responder</td>
                              <td><select style="width: 99%" name="plazo">
                                                                                <option></option>
                                                                                <option value="1">1 semana</option>
                                                                                <option value="2">2 semanas</option>
                                                                                <option value="3">3 semanas</option>
                                                                                <option value="4">4 semanas</option>
                                                                           </select></td>
                         </tr>
                   </tbody>
               </table><br><br>
             <center><input type="submit" name="en_pro" value="Enviar propuesta"><br><br></center>
          </form>
         <?php
               if (isset($_POST['en_pro'])) {
               
               $id = $_SESSION['id_us'];
               $dest = $_GET['ud'];
               $nom = $_POST['nom'];
               $pre = $_POST['pres'];
               $prone = $_POST['pro'];
               $equi = $_POST['equi'];
               $cli = $_POST['cli'];
               $ref= $_POST['ref'];
               $time = $_POST['time'];
               $plazo= $_POST['plazo'];

               $sql = "INSERT INTO propuestas (id_usuario, dest, nombrep, presentacion, pro_ne, equipo, clientes, refe, tiempo, plazo, fech) VALUES ($id, $dest, '$nom', '$pre', '$prone','$equi','$cli','$ref', '$time', '$plazo', NOW())";

               $result=$conn->query($sql);

               if ($result) 
               {
               echo "Su propuesta ha sido enviada con éxito";
               }else{
               echo "Su propuesta no ha podido ser enviada";
               }
          

               $conn->close(); 
          }
          ?>

             
          </center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../usuario/perfil.php">Perfil</a></h4><br><br><br><h4><a href="muro.php">Ingresa al muro</a></h4>
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