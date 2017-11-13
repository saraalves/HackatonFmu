<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
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

img {
	position: absolute;
	width: 700px;
	top: 1380px;
	left: 195px;
	
}


#container2 {
	background-color: rgba(22, 66, 149, .4);
	width: 80%;
	float: right;
	height: 500px;
	margin: auto;
	position: relative;
	top: 700px;
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
		
		font-size: 50pt;
		background: none;
		border: none;
		border-bottom:6px solid #fff;
		margin: 70px 0px 30px 0px;
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
}


#finalizar {
 position: relative;
 top: 750px;
 width: 780px;
 float: right;
 background: none;
 border: 4px solid #fff;
 color: #fff;
 border-radius: 0px;
}


#segundo {
	position: absolute;
	top: 300px;
	font-size: 100pt;
	border-bottom-right-radius: 80px;
	background-color: #fff;
	margin: 0;
	color: #000;
	padding: 0px 30px 10px 20px;
	box-shadow: 1px 1px 20px #000;
}


</style>

</head>
<body>










<p id="segundo">3º integrante</p>

<div class="container">
	
	<!--<img src="fmulogo.jpg">-->

	<form id="container2" method="post" action="codigo.php">
		
		<center><input type="text" placeholder="Nome" name="nomet"></center>
		
		<center><input type="text" placeholder="RA" name="rat"></center>
		<center><button type="subtmit" name="criar">Adicionar</button></center>
	</form>


<center><button id="finalizar">Finalizar</button></center>



</div>



</body>
</html>