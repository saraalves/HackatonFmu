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
		

		<p id="ngrupo"><?php echo $dado["equipe"]; ?></p>


		<?php } ?>

</div>



<!---<center><div id="tempo"></div></center>-->





<div class="container">

<div id="fundopais">
	<img id="euapais" src="brasil.png">
	<p id="nomepais">Brasil</p>
	<a href="desbloquearpais1.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<img id="euapais" src="estadosunidos.png">
	<p id="nomepais">Estados Unidos</p>
	<a href="estadosunidos.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<img id="euapais" src="alemanha.png">
	<p id="nomepais">Alemanha</p>
	<a href="alemanha.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<img id="euapais" src="suica.png">
	<p id="nomepais">Suíça</p>
	<a href="suica.php" id="codpais">Clique aqui para inserir o código</a>

</div>

<div id="fundopais">
	<img id="euapais" src="australia.png">
	<p id="nomepais">Australia</p>
	<a href="australia.php" id="codpais">Clique aqui para inserir o código</a>

</div>


	





</div>










</body>
</html>