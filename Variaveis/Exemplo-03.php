<?php
	
	$nome = "hcode";
	$site = 'www.hcode.com.br';
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;
	$i = 0;

	////////////////////////////////////////////

	$frutas = array('abacaxi', 'laranja', 'morango', 'manga' );

	echo $frutas[2];

	echo "<br>";

	$dataNascimento = new DateTime();

	//var_dump($dataNascimento);
	/////////////////////////////////////////////

	$arquivo = fopen("Exemplo-03.php", "r");

	//var_dump($arquivo);

	$var1 = null;
	$var2 = "";

?>