<?php  

session_start();
include("conectar.php");

$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$us = $_SESSION['id_us'];

$sql = "UPDATE datos SET foto='$foto' WHERE id_usuario=$us"; 

$result = $conn->query($sql);

if ($result) 
{
header("Location:../usuario/perfil.php");
}else{
header("Location:../usuario/c_dire.php");

}

$conn->close(); 


?>