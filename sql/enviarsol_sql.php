<?php  

session_start();
include("conectar.php");

$us=$_SESSION['id_us'];
$solpro = $_POST['solpro'];

$sql="INSERT INTO sol_pro (id_usuario, pro, fech) VALUES ('$us', '$solpro', NOW())";

$result = $conn->query($sql);

if ($result) 
{
header("Location:../muro/muro.php");
}else{
header("Location:../muro/ver_propuestas.php");

}

$conn->close(); 


?>