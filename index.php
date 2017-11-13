<?php
	include("conexao.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<script type="text/javascript" src="javascriptdois.js"></script>
<style type="text/css">
	body {
	margin: 0;
	padding: 0;

	
}

html {
	background: url(giffundo.gif) no-repeat center center fixed;
	background-size: cover;
	
}


div.container {
	width: 100%;
	height: 100vh;
	background-color: rgba(223, 0, 9, 0.7);
	border-radius: 0px;
	box-shadow: 0px 0px 20px #000;
	
	/*border: 2px solid #fff;*/
}

#fmutop {
	width: 200px;
	position: fixed;
	top: 60px;
	left: 140px;
}


#rallytop {
	width: 400px;
	position: absolute;
	top: 0px;
	left: 1200px;
	/*transform: rotate(15deg);*/
}


img {
	position: absolute;
	width: 700px;
	top: 1380px;
	left: 195px;
	
}


#container2 {
	background-color: rgba(22, 66, 149, .4);
	width: 80%;
	
	height: 1550px;
	margin: auto 0px 0px 0px;
	position: relative;
	top: 50px;
	border-bottom: 2px solid #fff;
	border-top: 2px solid #fff;
	
}





p {
	font-size: 40pt;
	font-family: sans-serif;
	font-weight: bold;
	color: #fff;
	margin: 10px;

}

	input {
		width: 65%;
		position: relative;
		top: 20px;
		font-size: 50pt;
		background: none;
		border: none;
		border-bottom:6px solid #fff;
		margin: 70px 0px 30px 0px;
		color: #fff;
	}


button {
	width: 200px;
	font-size: 40pt;
	color: #000;
	font-family: sans-serif;
	font-weight: bold;
	width: 65%;
	border-radius: 10px;
	padding: 20px 0px 20px 0px;
	position: relative;
	top: 100px;
}

button:hover {
	width: 200px;
	font-size: 40pt;
	color: #fff;
	font-family: sans-serif;
	font-weight: bold;
	width: 65%;
	border-radius: 10px;
	padding: 20px 0px 20px 0px;
	position: relative;
	top: 100px;
	background: none;
	border:3px solid #fff;
}



@media(min-width: 1200px) {
#container2 {
	background-color: rgba(22, 66, 149, .4);
	width: 80%;
	
	height: 400px;
	margin: auto 0px 0px 0px;
	position: relative;
	top: 150px;
	border-bottom: 2px solid #fff;
	border-top: 2px solid #fff;
	
}

input {
		width: 35%;
		position: relative;
		top: 70px;
		font-size: 25pt;
		background: none;
		border: none;
		border-bottom:1px solid #fff;
		margin: 10px 50px 30px 90px;
		color: #fff;
		float: left;
	}

html {
	background: url(anigif1.gif) no-repeat center center fixed;
	background-size: cover;
	
}

button {
	font-size: 30pt;
	color: #000;
	font-family: sans-serif;
	font-weight: bold;
	width: 35%;
	border-radius: 10px;
	padding: 10px 0px 10px 0px;
	position: relative;
	top: 80px;
	transition: 0.5s;
	cursor: pointer;
}

button:hover {
	font-size: 30pt;
	color: #fff;
	font-family: sans-serif;
	font-weight: bold;
	width: 35%;
	border-radius: 10px;
	padding: 10px 0px 10px 0px;
	position: relative;
	top: 80px;
	background: none;
	border:2px solid #fff;
	transition: 0.5s;
	cursor: pointer;
}









}




@media(min-width: 1400px) {
#container2 {
	background-color: rgba(22, 66, 149, .4);
	width: 80%;
	
	height: 500px;
	margin: auto 0px 0px 0px;
	position: relative;
	top: 150px;
	border-bottom: 2px solid #fff;
	border-top: 2px solid #fff;
	
}

input {
		width: 35%;
		position: relative;
		top: 80px;
		font-size: 25pt;
		background: none;
		border: none;
		border-bottom:1px solid #fff;
		margin: 10px 50px 30px 90px;
		color: #fff;
		float: left;
	}

html {
	background: url(anigif1.gif) no-repeat center center fixed;
	background-size: cover;
	
}

button {
	font-size: 30pt;
	color: #000;
	font-family: sans-serif;
	font-weight: bold;
	width: 35%;
	border-radius: 10px;
	padding: 20px 0px 20px 0px;
	position: relative;
	top: 190px;
	transition: 0.5s;
	cursor: pointer;
}

button:hover {
	font-size: 30pt;
	color: #fff;
	font-family: sans-serif;
	font-weight: bold;
	width: 35%;
	border-radius: 10px;
	padding: 20px 0px 20px 0px;
	position: relative;
	top: 190px;
	background: none;
	border:2px solid #fff;
	transition: 0.5s;
	cursor: pointer;
}









}


</style>

</head>
<body>






<img id="fmutop" src="logofmubranco.png">

<!-- <img id="rallytop" src="rally.png"> -->



<center><div class="container">
	
	<!-- <img src="fmulogo.jpg">
 -->
	<form name="form" id="container2" method="post" onsubmit="return validacao();" action="codigo.php">
		
		<center><input type="text" placeholder="Nome da equipe" name="nomeequipe"></center>
		<center><input type="text" placeholder="Líder" name="nomelider"></center>
		<center><input type="text" placeholder="Email" name="email"></center>
		<center><input type="text" placeholder="RA" name="ra"></center>

		<center><input id="usudois" type="text" placeholder="2º integrante" name="nomeu2"></center>
		<center><input type="text" placeholder="RA" name="rau2"></center>

		<center><input id="usutres" type="text" placeholder="3º integrante" name="nomeu3"></center>
		<center><input type="text" placeholder="RA" name="rau3"></center>
		<center><button type="subtmit" name="criar">Cadastrar</button></center>
	</form>






</div></center>



</body>
</html>