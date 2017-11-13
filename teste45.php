<?php


include("conexao2.php");

	$consulta = "SELECT * FROM usuarios";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	



?>




<html>
<head>
</head>
<body>

<?php while ($dado = $con->fetch_array()) { ?>
		

		<p id="ngrupo"><?php echo $dado["equipe"]; ?></p>


		<?php } ?>

</body>
</html>