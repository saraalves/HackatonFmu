<!DOCTYPE html>
<html>
<head>
	<title>Alemanha</title>
	<meta charset="utf-8">






	<style type="text/css">
		 body {
		 	margin: 0;
		 	padding: 0;
		 }



		html {
	background: url(fundo1.jpg) no-repeat center center fixed;
	background-size: cover;
	
}


div.container {
	width: 100%;
	height: 100vh;
	background-color: rgba(0, 0, 0, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	position: fixed;
	/*border: 2px solid #fff;*/
}






#fotoperfil {
	position: fixed;
	top: 15px;
	left: 15px;
	border-radius: 280px;
	width: 130px;
	border:5px solid #fff;
}

#ngrupo {
	position: fixed;
	top: -10px;
	left: 190px;
}





div.tollbar {
	background-color: rgba(223, 0, 9, 1.9);
	width: 100%;
	height: 180px;
	position: fixed;
	top: 0px;
	box-shadow: 1px 1px 20px #000;

}

#ngrupo {
	color: #fff;
	font-size: 50pt;
	font-family: sans-serif;
	margin: none;
	position: relative;
	top: -10px;
}
















		#pergunta1 {
			font-size: 30pt;
			font-family: sans-serif;
			font-weight: bold;
			color: #000;
			margin: 30px 0px 30px 30px;
			text-align: left;
		}


		#fundopergunta {
			background-color: rgba(255, 255, 255, .9);
			width: 95%;
			box-shadow: 1px 1px 10px #000;
			padding: 30px 0px 30px 0px;
			position: relative;
			top: 200px;
		}














		#fundoform {
			position: relative;
			top: 400px;
			background-color: rgba(255, 255, 255, .9);
			width: 95%;
			margin: auto;
			padding: 0px 0px 0px 10px;
		}



		 label {
			font-size: 25pt;
			font-family: sans-serif;
			text-align: center;
			font-weight: bold;
			color: #000;
			padding: 10px;
			
			
		}
		#alternativaA {
			width: 40px;
			height: 40px;
			margin: 40px 0px 40px 0px;

		}
		#alternativaB {
			width: 40px;
			height: 40px;
			margin: 40px 0px 40px 0px;
		}
		#alternativaC {
			width: 40px;
			height: 40px;
			margin: 40px 0px 40px 0px;
		}
		#alternativaD {
			width: 40px;
			height: 40px;
			margin: 40px 0px 40px 0px;
		}
		#alternativaE {
			width: 40px;
			height: 40px;
			margin: 40px 0px 40px 0px;
		}

		form button {
			font-size: 80px;
			position: relative;
			top: 40px;
			background-color: red;
			color: #fff;
			float: right;
			border: none;
			padding: 10px;
			border-radius: 30px;
		}
		
		
@media(min-width: 1400px) {

div.tollbar {
	background-color: rgba(223, 0, 9, 1.9);
	width: 100%;
	height: 80px;
	position: fixed;
	top: 0px;
	box-shadow: 1px 1px 20px #000;
}
#ngrupo {
	color: #fff;
	font-size: 25pt;
	font-family: sans-serif;
	margin: none;
	position: relative;
	top: -10px;
	left: 230px;
}
div.container {
	width: 100%;
	height: 100vh;
	background-color: rgba(0, 0, 0, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	position: fixed;
	/*border: 2px solid #fff;*/
}
#fundopergunta {
			background-color: rgba(255, 255, 255, .9);
			width: 70%;
			box-shadow: 1px 1px 10px #000;
			padding: 30px 0px 30px 0px;
			position: relative;
			top: 200px;
			border-radius: 10px;
		}
#fundoform {
			position: relative;
			top: 400px;
			background-color: rgba(255, 255, 255, .9);
			width: 70%;
			margin: auto;
			padding: 0px 0px 0px 10px;
			border-radius: 10px;
		}
#imagem1 {
		width: 900px;
		}












}


@media(max-width: 700px) {

div.tollbar {
	background-color: rgba(223, 0, 9, 1.9);
	width: 100%;
	height: 80px;
	position: fixed;
	top: 0px;
	box-shadow: 1px 1px 20px #000;
}
#ngrupo {
	color: #fff;
	font-size: 25pt;
	font-family: sans-serif;
	margin: none;
	position: relative;
	top: -10px;
	left: 230px;
}
div.container {
	width: 100%;
	height: 100vh;
	background-color: rgba(0, 0, 0, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	position: fixed;
	/*border: 2px solid #fff;*/
}
#fundopergunta {
			background-color: rgba(255, 255, 255, .9);
			width: 70%;
			box-shadow: 1px 1px 10px #000;
			padding: 30px 0px 30px 0px;
			position: relative;
			top: 200px;
		}
#fundoform {
			position: relative;
			top: 400px;
			background-color: rgba(255, 255, 255, .9);
			width: 70%;
			margin: auto;
			padding: 0px 0px 0px 10px;
		}
#imagem1 {
		width: 900px;
		}
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

$mysqli = mysqli_query($mysqli,"INSERT INTO alemanha (questao1) VALUES ('$perguntaum')");
?>








<div class="tollbar">
	<!--<a href="#"><img id="mundo" src="mundo2.png"></a>
	<center><a href="#"><img id="mail" src="mail2.png"></a></center>
	<a href="#"><img id="relogio" src="relogio2.png"></a>-->
<!--<img id="fotoperfil" src="fotoperfil.jpg">-->
<p id="ngrupo">Nome do grupo</p>

</div>




<div class="container"></div>







<center><div id="fundopergunta">
<p id="pergunta1">2.	Patrícia tem três carros: um Camaro, uma Ferrari e um Fusca. Um dos carros é branco, o outro é preto, e o outro é vermelho. Sabe-se que:

(I) ou Camaro é branco, ou o Fusca é branco.
(II) ou o Camaro é preto, ou a Ferrari é vermelha.
(III) ou Fusca é vermelho, ou a Ferrari é vermelha.
(IV) ou a Ferrari é preta, ou o Fusca é preto.

Portanto, as cores do Camaro, da Ferrari e do Fusca são, respectivamente:
</p>
</div></center>

	<div id="fundoform">
	<form method="post" action="POSTO01EUAPERGUNTA3.php">
		<input type="radio" name="opcoes" id="alternativaA" value="A">
		<label for="alternativaA">A) branca, preta e vermelha.</label><br/>

		<input type="radio" name="opcoes" id="alternativaB" value="B">
		<label for="alternativaB">B) preta, vermelha e branca.</label><br/>

		<input type="radio" name="opcoes" id="alternativaC" value="C">
		<label for="alternativaC">C) branca, vermelha e preta.</label><br/>

		<input type="radio" name="opcoes" id="alternativaD" value="D">
		<label for="alternativaD">D) vermelha, branca e preta.</label><br/>

		<input type="radio" name="opcoes" id="alternativaE" value="E">
		<label for="alternativaE">E) preta, branca e vermelha</label><br/>
		<button type="submit" name="confirmar">Confirmar</button>
	</form>
	</div>
</body>
</html>