<?php

	//include "include01.php";
	//require "include01.php";// Require obriga que o arquivo exista e que esteja funcionando corretamente
	require_once "include01.php";¨// o _once garante que o arquivo seja incluido apenas uma vez evitando erros
	
	$resultado = somar(10 , 20);

	echo $resultado;

?>