<?php


include("conexao2.php");

	$consulta = "SELECT * FROM usuarios";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Paises</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript">
	
	var count=new Number();
	var count=5401;

	function start(){
		if((count - 1) >= 0) {
			count=count - 1;
			tempo.innerText=count;
			setTimeout('start();',1000);

		}
	}











	</script>
</head>
<body onload="start();">



<div class="tollbar">
	<!--<a href="#"><img id="mundo" src="mundo2.png"></a>
	<center><a href="#"><img id="mail" src="mail2.png"></a></center>
	<a href="#"><img id="relogio" src="relogio2.png"></a>-->
<!--<img id="fotoperfil" src="fotoperfil.jpg" >-->
<?php while ($dado = $con->fetch_array()) { ?>
		

		<p id="ngrupo">Equipe: <?php echo $dado["equipe"]; ?></p>


		<?php } ?>

</div>



<!---<center><div id="tempo"></div></center>-->





<div class="container">

<div id="fundopais">
	<a href="desbloquearpais1.php"><img id="euapais" src="brasil.png"></a>
	<p id="nomepais">Brasil</p>
	<a href="desbloquearpais1.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<a href="desbloquearpais2.php"><img id="euapais" src="estadosunidos.png"></a>
	<p id="nomepais">Estados Unidos</p>
	<a href="desbloquearpais2.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<a href="desbloquearpais3.php"><img id="euapais" src="alemanha.png"></a>
	<p id="nomepais">Alemanha</p>
	<a href="desbloquearpais3.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<a href="desbloquearpais4.php"><img id="euapais" src="suica.png"></a>
	<p id="nomepais">Suíça</p>
	<a href="desbloquearpais4.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<a href="desbloquearpais5.php"><img id="euapais" src="australia.png"></a>
	<p id="nomepais">Australia</p>
	<a href="desbloquearpais5.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<img id="log" src="logofmubranco.png">


	





</div>

<img id="rallytop" src="rallybranco.png">








</body>
</html>