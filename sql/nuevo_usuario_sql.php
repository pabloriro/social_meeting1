<?php  

include("conectar.php");

$nome = $_POST['nom_emp'];
$maile = $_POST['mail_emp'];
$cone = $_POST['con_emp'];

$conn->query("INSERT INTO usuario (nombre, mail, contra, fecha_crea) VALUES ('$nome', '$maile', '$cone', NOW())");

$conn->query("INSERT INTO datos (id_usuario) values (".$conn->insert_id.")");

if ($conn) 
{
header("Location:../usuario/ingreso_correcto.php");
}else{
header("Location:../usuario/ingreso_incorrecto.php");
}

$conn->close(); 

?>