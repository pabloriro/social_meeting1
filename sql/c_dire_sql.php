<?php  

session_start();
include("conectar.php");
//include("ingresar_sql.php");

$dire = $_POST['dire'];
$us = $_SESSION['id_us'];

//if ($foto=0) {
//	$sql = "UPDATE datos SET foto = '$fotop' from usuario us WHERE foto  NULL AND id_usuario=$id_us JOIN datos dat ON 'id_usuario.dat' = 'id_usuario.us'"; 
//}else{
$sql = "UPDATE datos SET direccion='$dire' WHERE id_usuario=$us"; 
//}

$result = $conn->query($sql);

if ($result) 
{
header("Location:../usuario/perfil.php");
}else{
header("Location:../usuario/c_dire.php");

}

$conn->close(); 


?>