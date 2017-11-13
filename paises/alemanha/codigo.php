<?php


include("conexao2.php");

	$consulta = "SELECT * FROM usuarios";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Rally do conhecimento</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript" src="javascript.js"></script>
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

<div class="tollbar">
	<!--<a href="#"><img id="mundo" src="mundo2.png"></a>
	<center><a href="#"><img id="mail" src="mail2.png"></a></center>
	<a href="#"><img id="relogio" src="relogio2.png"></a>-->
<!---<img id="fotoperfil" src="fotoperfil.jpg">-->



<?php while ($dado = $con->fetch_array()) { ?>
		

		<p id="ngrupo"><?php echo $dado["equipe"]; ?></p>


		<?php } ?>






</div>


<div class="container">

	<!--<center><p id="boasvindas">Rally do conhecimento</p></center>-->
	<!--<center><img id="rally" src="rally.png"></center>-->

	<form name="form" method="post" onsubmit="return validacao();" action="paises/fase1.php">
		<center><p>Código de checkin:</p></center>
		<center><input id="chek" type="text" name="checkin"></center>
		<center><button>Iniciar fase 1</button></center>

	</form>

<center><img src="logofmubranco.png"></center>



</div>













</body>
</html>