<?php

	$idadeAtual = 30;

	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeIdoso = 65;

	if ($idadeAtual < $idadeCrianca){

		echo "É Criança";

	}else if ($idadeAtual < $idadeMaior){

		echo "É Adolecente";

	}else if ($idadeAtual < $idadeIdoso) {

		echo "É Adulto";
		
	}else{

		echo "É Idoso";

	}

	echo "<br>";

	//echo ($idadeAtual < $idadeMaior)?"Menor de idade":"Maior de idade";

?>