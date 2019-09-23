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
          <tr>
          <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Resultados de la búsqueda</h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../index.php">Volver a buscar</a></h4>
          </td>
          </tr>
            <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><br><br><center>
               <h2>No se han encontrado empresas relacionadas con la busqueda. Intenta de nuevo</h2>
          </center>          
          </td>
          <td >
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