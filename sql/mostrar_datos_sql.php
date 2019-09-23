<?php 
include("conectar.php");

session_start();

$maile = $_POST['mail'];
$passe = $_POST['pass'];

$sql = "SELECT * FROM usuario WHERE mail = '$maile' and contra = '$passe'";

$result = $conn->query($sql);

if ($result->num_rows>=1) 
{
$fila=mysqli_fetch_array($result, MYSQLI_ASSOC);

$_SESSION['nom_emp']=$fila['nombre'];

	header("Location:../usuario/perfil.php");
}else{
	header("Location:../ingreso_malo.php");

}

$conn->close(); 


?>