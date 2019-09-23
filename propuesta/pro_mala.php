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
 <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
 	<tbody>
 		 <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
     <tbody>
          <tr>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Enviar Propuesta</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="cerrar.php"> Cerrar sesión</a></h4>
          </td>
          </tr>
            <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><br><br><center>
               <form method="post" action="../sql/nueva_pro.php">
                    <table border="1" style="text-align: left;" cellpadding="2" cellspacing="2">
                    <tbody>
                         <tr>
                              <td style="width: 600px" colspan="2"><center><h3>Nueva Propuesta</h3></center></td>
                              
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
                              <td><textarea style="width: 99%" type="text" name="equi" rows="2"></textarea><tr>
                            </tr></td>
                              
                         </tr>
                         <tr>
                              <td>Tiempo de ejecución:</td>
                              <td><textarea style="width: 99%" type="text" name="equi" rows="2"></textarea><tr>
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
                                                                           <center><h3>Tu Propuesta no pudo ser enviada intentalo de nuevo</h3></center>
                         </tr>
                   </tbody>
               </table><br><br>
             <center><input type="submit" name="en_pro" value="Enviar propuesta"></center>
          </form>
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