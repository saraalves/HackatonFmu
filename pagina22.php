

<?php

	$nota = 5;
	$resposta = A;
	$selecao = isset($_GET['opcoes']);
	do {
	   if($selecao !== $resposta){
		$nota = $nota--;
		echo "resposta errada, está pergunta esta valendo apenas $nota";
	}while ($nota > 0);
	
?>
