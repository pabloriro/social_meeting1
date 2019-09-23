<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <title></title>
  </head>
  <body background="imagenes/fondo_verde.jpg", style="font-family: Verdana; font-size:25; background-repeat: no-repeat; background-position: center center fixed; background-size: cover">
    <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
      <tbody>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="vertical-align: top;"><br>
            <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
              <tbody>
                <tr>
                  <script type="text/javascript">
                    function validaringresar(){
                      var r = document.forms["form_ingresar"]["mail"].value;
                      if (r == null || r == "" || r == " ") {
                      alert("Debes ingresar un mail registrado");
                      return false;
                      }
                      var n = document.forms["form_ingresar"]["pass"].value;
                      if (n == null || n == "" || n == " ") {
                      alert("Debes ingresar contraseña");
                      return false;
                      }
                    }
                  </script>
                  <td style="text-align: center;"></td>
                  <td style="text-align: right; font-family: Verdana";>
                    <form id="form_ingresar" method="post" action="sql/ingresar_sql.php" onsubmit="return validaringresar()"><h3>Ingresa ahora</h3>  Mail: 
                    <input type="text" name="mail" style="width:250px">
                     Contraseña 
                    <input type="password" name="pass"> 
                    <input style="font-family: Verdana" type="submit" name="ingresar" value="Ingresar"></form></td>
                </tr>
              </tbody>
            </table>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br><br>
          </td>
          <td style="vertical-align: top;"><h4 style="text-align: right;">Tu mail o contraseña no son correctos. Intenta nuevamente</h4><center><h1 style="font-size: 34px"><br>Meeting</h1></center>
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
                <form id="form_buscar" method="post" action="buscar.html" onsubmit="return validarbuscar()">
                <td style="text-align: center; font-family: Verdana; width: 200px">
                  <input  style="WIDTH: 600px; HEIGHT: 22px" type="text" name="buscar">
                  <input style="font-family: Verdana" type="submit" name="buscar1" value="Buscar">
                </form>               
                </td>
              </tr>
            </tbody>
          </table>            
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="text-align: center; font-family: Verdana"><br><br><br><br><br>
            <a href="usuario/ingreso_usuario.php"><input style="font-family: Verdana" type="button" name="reg" value="Regístrate"></a>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
