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
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Perfil de <?php echo $_SESSION['nom_emp'] ?></h2></center>          
          </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="cerrar.php"> Cerrar sesión</a></h4>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;" width="150px"><br><br><center><h4><br><br><a href="../busqueda/buscar2.php.php">Buscar empresas</a></h4></center>
          </td>
          <td style="vertical-align: top;" width="1000px"><center>
            <table border="1">
              <tbody>
                <tr style="height: 120px">
                  <td style="width: 100px">Foto: </td>
                  <td style="width: 100px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);
                      while ($fila=$result->fetch_assoc()) 
                        { ?>

                      <img style="width: 200px; height: 200px;" src="data:image/jpg;base64, <?php echo base64_encode($fila['foto']) ?>"/>
                      <?php
                      }
                      ?>
                  </center>
                  </td>
                </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Pais: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['pais'];}  
                      ?>
                  </center></td>
                </tr>
                <tr style="height: 70px">
                 <td style="width: 100px">Rubro: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['rubro'];}  
                      ?>
                  </center></td>
                </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Tipo: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['tipo'];}  
                      ?>
                  </center></td>
                </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Rut: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['rut'];}  
                      ?>
                  </center></td>
                 </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Dirección: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['direccion'];}  
                      ?>
                  </center></td>
                 </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Sitio Web: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['sitio'];}  
                      ?>
                  </center></td>
                 </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Fono: </td>
                  <td style="width: 400px"><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['fono'];}  
                      ?>
                  </center></td>
                 </tr>
                <tr style="height: 70px">
                  <td>Mail de contacto: </td>
                  <td><center>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['mail_contacto'];}  
                      ?>
                  </center></td>
                 </tr>
                <tr style="height: 70px">
                  <td style="width: 100px">Descripción: </td>
                  <td>
                    <?php 
                      $user = $_SESSION['id_us'];
                      $sql= "SELECT * FROM datos WHERE id_usuario = $user";

                      $result = $conn->query($sql);

                      while ($fila=$result->fetch_assoc()) 
                      {echo $fila['descripcion'];}  
                      ?>
                  </td>
                 </tr>
              </tbody>
            </table>
                  
          </td>
          <td style="vertical-align: top;" width="150px"><br><br>
            <table border="0">
              <tbody>
                <tr><td><h4><a href="../muro/muro.php"> Ingresa al Muro</a></h4></td></tr>
                 <tr><td><br><br><br><h4>Enviar propuesta</h4></td></tr><br><br><br>
              </tbody>
            </table>
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
  </body>
</html>
