<?php


include("conexao3.php");

	// $consulta = "SELECT * FROM alemanha";
	// $con = $mysqli->query($consulta) or die($mysqli->error);
	// $consulta2 = "SELECT * FROM alemanha";
	// $con2 = $mysqli->query($consulta2) or die($mysqli->error);
	// $consulta3 = "SELECT * FROM alemanha";
	// $con3 = $mysqli->query($consulta3) or die($mysqli->error);
	// $consulta4 = "SELECT * FROM alemanha";
	// $con4 = $mysqli->query($consulta4) or die($mysqli->error);
	



?>


<!DOCTYPE html>
<html>
<head>
	<title>asdjasdf</title>
	<script> 
document.write="Preparando...";
window.setTimeout("location.href='resultadoalemanha.php'", 4000)

</script>

<style type="text/css">
	#carregando {
		position: relative;
		top: 250px;
	}
	/*body {
	width: 100%;
	height: 100vh;
	background-color: rgba(0, 0, 0, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	position: fixed;
	/*border: 2px solid #fff;*/
	margin: 0;
	padding: 0;
	}*/
	html {

	
	
}


</style>
</head>
<body>

<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "questoes";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno)
	echo "falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

$perguntaum = $_POST['opcoes'];

$mysqli = mysqli_query($mysqli,"INSERT INTO alemanha (questao4) VALUES ('$perguntaum')");
?>





		
<center><img id="carregando" src="123.gif"></center>
		
		






</body>
</html>