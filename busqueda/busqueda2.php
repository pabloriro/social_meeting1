<?php 

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
          <td style="vertical-align: top; width: 200px"><br>
          </td>
          <td style="vertical-align: top; width: 700px"><center><h3><a href="../muro/muro.php">Muro</a></h3></center><br>
          </td>
          <td style="vertical-align: top; width: 200px"><center><h3><a href="../usuario/cerrar.php">Cerrar Sesión</a></h3></center><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br><br>
          </td>
          <td style="vertical-align: top;" align="center"><h1 style="font-size: 34px"><br><br>Meeting</h1>
          <table style="text-align: center; width: 100%;" cellspacing="2" cellpadding="2" border="0">
            <tbody>
              <tr>
                <td><h3>¿Quieres tener un meeting de negocios? Busca ahora tus nuevos clientes</h3></td>
              </tr>
              <tr>
                <script type="text/javascript">
                  function validarbuscar(){
                    var n = document.forms["form_buscar"]["buscar"].value;
                      if (n == null || n == "" || n == " ") {
                      alert("Debes ingresar el nombre de una empresa");
                      return false;
                      }
                  }
                </script>
                <form id="form_buscar" method="post" action="result_busqueda2.php" onsubmit="return validarbuscar()">
                <td style="text-align: center; font-family: Verdana; width: 200px">
                  <input  style="WIDTH: 600px; HEIGHT: 22px" type="text" name="buscar" autocomplete="off">
                  <input style="font-family: Verdana" type="submit" name="buscar1" value="Buscar">
                </form>              
                </td>
              </tr>
            </tbody>
          </table>            
          </td>
          <td style="vertical-align: top;"><br><center><h3><a href="../usuario/perfil.php">Volver a perfil</a></h3></center><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="text-align: center; font-family: Verdana"><br><br><br><br><br>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
