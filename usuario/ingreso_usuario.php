<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <title></title>
  </head>
  <body background="../imagenes/fondo_verde.jpg", style="font-family: Verdana; font-size:25; background-repeat: no-repeat; background-position: center center; background-size: cover">
    <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="0">
      <tbody>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="text-align: center;"><h1>Meeting</h1><br>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="vertical-align: top;"><br>
            <script type="text/javascript">
               function validarnuevous(){
                      var r = document.forms["formnu"]["nom_emp"].value;
                      if (r == null || r == "" || r == " ") {
                      alert("Debes llenar todos los campos");
                      return false;
                      }
                      var r = document.forms["formnu"]["mail_emp"].value;
                      if (r == null || r == "" || r == " ") {
                      alert("Debes llenar todos los campos");
                      return false;
                      }
                      var r = document.forms["formnu"]["con_emp"].value;
                      if (r == null || r == "" || r == " ") {
                      alert("Debes llenar todos los campos");
                      return false;
                      }
                      var r = document.forms["formnu"]["recon_emp"].value;
                      if (r == null || r == "" || r == " ") {
                      alert("Debes llenar todos los campos");
                      return false;
                      }
                      var r = document.forms["formnu"]["recon_emp"].value;
                      var p = document.forms["formnu"]["con_emp"].value;
                      if (r !== p) {
                      alert("Las contraseñas deben ser idénticas");
                      return false;
                      }
                                           
                    }
            </script>
            <form id="formnu" method="post" action="../sql/nuevo_usuario_sql.php" name="registro_cli" onsubmit="return validarnuevous()">
              <table style="text-align: left; width: 100px;" aling="center" cellspacing="2"; cellpadding="2" border="0" align="center">
                <tbody>
                  <tr>
                    <td style="vertical-align: top;" align="center">
                      <h2>Registro Usuarios</h2>
                      <br>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Nombre de Empresa: <input maxlength="40" size="40" name="nom_emp"><br>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Mail: <input maxlength="40"

                        size="40" name="mail_emp"><br>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Contraseña: <input maxlength="40"

                        size="40" name="con_emp" type="password"><br>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">Repetir Contraseña: <input maxlength="40" size="40" name="recon_emp" type="password"><br>
                    </td>
                  </tr>
                  <tr>
                    <td style="vertical-align: top;">
                      <center><br><input style="font-family: Verdana"; name="guardar" value="Guardar" type="submit"><br><br>
                        <a href="../index.php"><input style="font-family: Verdana"; name="volver" value="Volver a Inicio" type="button"></a></center>
                    </td>
                  </tr>
                  </tbody>
              </table>
            </form>
            <br>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
          <td style="vertical-align: top;"><br>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <br>
    
  </body>
</html>
