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
















?>

<div class="tollbar">
	<!--<a href="#"><img id="mundo" src="mundo2.png"></a>
	<center><a href="#"><img id="mail" src="mail2.png"></a></center>
	<a href="#"><img id="relogio" src="relogio2.png"></a>-->
<!---<img id="fotoperfil" src="fotoperfil.jpg">-->



<?php while ($dado = $con->fetch_array()) { ?>
		

		<center><p id="ngrupo">Equipe: <?php echo $dado["equipe"]; ?></p>


		<?php } ?></center>






</div>


<div class="container">

	<!--<center><p id="boasvindas">Rally do conhecimento</p></center>-->
	<!--<center><img id="rally" src="rally.png"></center>-->

	<form name="form" method="post" onsubmit="return validacao();" action="#">
		

	</form>

<center><img src="logofmubranco.png"></center>



</div>



<img id="rallytop" src="rallybranco.png">









</body>
</html>