<?php  

session_start();

include("conectar.php");

$us = $_SESSION['id'];

$sql="SELECT * FROM usuario a, datos b WHERE a.id_usuario = b.id_usuario and iddato = $us";

$result = $conn->query($sql);

if ($result->num_rows>=1) 
{
$fila=$result->fetch_array(MYSQLI_ASSOC);

$_SESSION['no']=$fila['nombre'];
$_SESSION['id']=$fila['iddato'];

	header("Location:../busqueda/perfilbusqueda.php");
}else{
	header("Location:../busqueda/busqueda2.php");

}

$conn->close(); 


?>