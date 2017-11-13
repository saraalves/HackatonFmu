<?php


include("conexao4.php");

	
	



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



<form id="mensagem" method="post" action="#">

<textarea name="mensagem"></textarea>
<button type="submit">Enviar</button>
	
</form>







	<?php


$perguntaum = isset($_POST['mensagem']);

$mysqli = mysqli_query($mysqli,"INSERT INTO mensagens (mensagem) VALUES ('$perguntaum')");
?>

<div class="tollbar">
	<!--<a href="#"><img id="mundo" src="mundo2.png"></a>
	<center><a href="#"><img id="mail" src="mail2.png"></a></center>
	<a href="#"><img id="relogio" src="relogio2.png"></a>-->
<!---<img id="fotoperfil" src="fotoperfil.jpg">-->










</div>


<div class="container">

	<!--<center><p id="boasvindas">Rally do conhecimento</p></center>-->
	<!--<center><img id="rally" src="rally.png"></center>-->

	

<center><img src="logofmubranco.png"></center>



</div>



<img id="rallytop" src="rallybranco.png">



<?php

$sql = mysql_query("SELECT * FROM mensagens");

$row = mysql_num_rows($sql);
if ($row > 0) {
	while ($linha = mysql_fetch_array($sql)) {
		$nome = $linha['equipe'];
		$mensagem = $linha['mensagem'];
		echo $nome; 
		echo $mensagem; 
	}
}

?>





</body>
</html>