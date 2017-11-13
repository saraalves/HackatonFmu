<html>
<head>

</head>

<body>

<?php


$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno)
	echo "falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_error;




$nomeequipe = $_POST['nomeequipe'];
$nomelider = $_POST['nomelider'];
$ral = $_POST['ra'];
$nomeu2 = $_POST['nomeu2'];
$rau2 = $_POST['rau2'];
$nomeu3 = $_POST['nomeu3'];
$rau3 = $_POST['rau3'];
$email = $_POST['email'];








$mysqli = mysqli_query($mysqli,"INSERT INTO usuarios (equipe, nomeu1, rau1, nomeu2, rau2, nomeu3, rau3, email) VALUES ('$nomeequipe', '$nomelider', '$ral', '$nomeu2', '$rau2', '$nomeu3', '$rau3', '$email')");


?>


</body>


</html>