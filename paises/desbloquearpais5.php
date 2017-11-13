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
	<script type="text/javascript" src="javascriptsete.js"></script>
	<style type="text/css">
		body {
	margin: 0;
	padding: 0;

	
}

html {
	background: url(fundo1.jpg) no-repeat center center fixed;
	background-size: cover;
	
}



div.tollbar {
	background-color: rgba(223, 0, 9, 1.9);
	width: 100%;
	height: 180px;
	position: absolute;
	top: 0px;
	box-shadow: 1px 1px 20px #000;
	margin: 0;

}
#fotoperfil {
	position: absolute;
	top: 15px;
	left: 15px;
	border-radius: 280px;
	width: 130px;
	border:5px solid #fff;
}

#ngrupo {
	position: absolute;
	top: -10px;
	left: 190px;
	color: #fff;
	font-size: 50pt;
	font-family: sans-serif;
	margin: none;
}























div.container {
	width: 100%;
	height: 150vh;
	background-color: rgba(223, 0, 9, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	margin: 0;
	/*border: 2px solid #fff;*/
}



#euapais {
	width: 300px;
}


#fundopais2 {
	background-color: rgba(225, 255, 255, 0.6);
	width: 80%;
	height: 600px;
	margin: 75px;
	border-radius: 30px;
	position: relative;
	top: 450px;
	padding: 0px 50px 10px 0px;

}


#nomepais {
	color: #000;
	font-size: 50pt;
	font-family: sans-serif;
	position: absolute;
	top: 60px;
	left: 300px;
	margin: 0;
	font-weight: bold;
}

#codpais {
	color: #fff;
	font-size: 30pt;
	font-family: sans-serif;
	font-weight: bold;
	position: absolute;
	top: 170px;
	left: 430px;
	margin: 0px 50px 10px 0px;
	background-color: #000011;
	border-radius: 5px;
	padding: 20px 0px 20px 20px;
	box-shadow: 1px 1px 10px #000;
	opacity: .7;
	text-decoration: none;
}



#tempo {
	position: absolute;
	top: 650px;
	background: none;
	width: 100px;
	height: 100px;
	color: #fff;
	font-size: 80pt;

}


#teste{
	background-color: #fff;
	width: 900px;

}


input {
	font-size: 40pt;
	position: relative;
	background: none;
	border: 4px solid #fff;
	margin-left: 50px;
	margin-top: 30px;
	border-radius: 10px;
}


button {
	display: block;
	width: 84%;
	font-size: 40pt;
	border-radius: 10px;
	background: none;
	border: 4px solid #fff;
	color: #fff;
	margin-left: 50px;
}



#local {
	display: block;
	width: 400px;
	position: absolute;
	top: 330px;
	left: 550px;
}



	</style>
	
















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

<div id="fundopais2">
	<img id="euapais" src="australia.png">
	<p id="nomepais">Australia</p>
	<form name="form" method="post" action="australia\PERGUNTA1\POSTO03AUSTRALIAPERGUNTA1.html" onsubmit="return validacao();">
	<center><input type="text" placeholder="Insira o codigo do ponto" name="codigodoponto"></center><br/><br/>
	<center><button id="botaoinicio">Começar</button></center>
	</form>

</div>


<a href="mapa/mapaAustralia.html"><img id="local" src="local.png"></a>









	





</div>










</body>
</html>