<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "cadastro";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno)
	echo "falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>