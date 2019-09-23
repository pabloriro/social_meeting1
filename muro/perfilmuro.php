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
           <?php 
                      $user = $_GET['id'];
                      $sql= "SELECT b.iddato, a.id_usuario, a.nombre, b.foto, b.pais, b.rubro, b.tipo, b.rut, b.direccion, b.sitio, b.fono, b.mail_contacto, b.descripcion FROM usuario a, datos b WHERE a.id_usuario=b.id_usuario and iddato = $user";

                      $result = $conn->query($sql);
                      while ($fila=$result->fetch_assoc()) 
                        { 

                          $iddato = $fila['iddato'];
                          $nombre = $fila['nombre'];
                          $foto = $fila['foto'];
                          $pais= $fila['pais'];
                          $rubro = $fila['rubro'];
                          $tipo = $fila['tipo'];
                          $rut = $fila['rut'];
                          $dire = $fila['direccion'];
                          $sitio = $fila['sitio'];
                          $fono = $fila['fono'];
                          $mailc = $fila['mail_contacto'];
                          $des = $fila['descripcion'];
                          $idu = $fila['id_usuario']; 
                          
                          ?>

          <td style="vertical-align: top;" width="150px"><br>
          </td>
          <td style="vertical-align: top;" width="1000px"><center><br><h2>Perfil de <?php echo $nombre; ?></h2>
          </center> 
        </td>
          <td style="vertical-align: top;" width="150px"><br><h4><a href="../usuario/cerrar.php">Cerrar sesión</a></h4>
          </td>
        </tr>
        <tr>
          <td style="vertical-align: top;" width="150px"><br><br><center><br><br><h4><a href="../busqueda/busqueda2.php">Buscar empresas</a><br><br><br><a href="../usuario/perfil.php">Perfil</a></h4></center></td>
          <td style="vertical-align: top; width: 1000px">
            <center>
              <table border="1">
                <tbody><center>
                <tr style="height: 120px">
                  <td style="width: 100px"><center>Foto:</center></td>
                  <td style="width: 100px">
                      <center><img style="width: 100px; height: 100px;" src="data:image/jpg;base64, <?php echo base64_encode($foto) ?>"></center>
                    </td>
                  </tr>
                      <tr>
                        <td><center>País:</center></td>
                        <td><?php echo $pais;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Rubro:</center></td>
                        <td><?php echo $rubro;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Tipo:</center></td>
                        <td><?php echo $tipo;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Rut:</center></td>
                        <td><?php echo $rut;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Dirección:</center></td>
                        <td><?php echo $dire;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Sitio Web:</center></td>
                        <td><?php echo $sitio;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Teléfono:</center></td>
                        <td><?php echo $fono;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Mail de contacto:</center></td>
                        <td><?php echo $mailc;  ?></td>
                      </tr>
                      <tr>
                        <td><center>Descripción:</center></td>
                        <td><?php echo $des;  ?></td>
                      </tr>
                      
                      <?php
                      }
                      ?>
                  </center>
              </tbody>
            </table>
          </center>
          </td>
          <td style="vertical-align: top;" width="150px"><br><br>
            <table border="0">
              <tbody>
                <tr><td><h4><a href="../muro/muro.php">Ingresa al Muro</a></h4></td></tr>
                 <tr><td><br><br><br><h4><a class="envi_pro" href="../muro/enviar_propuesta.php?ud=<?php echo $idu;?>">Enviar Propuesta</a></h4></td></tr><br><br><br>
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
