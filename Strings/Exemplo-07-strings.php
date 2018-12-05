<?php

	$nome = "hcode";

	$nome2 = 'treinamentos';

	var_dump($nome, $nome2);

	echo "ABC $nome";

	echo "<br>";

	echo 'ABC $nome';

	////////////////////////////////////////////////////

	$nome = "joão rangel";

	$nome = strtoupper($nome); // Todas as letras ficam maiusculas

	echo $nome;

	$nome = strtolower($nome); // Todas as letras ficam minusculas

	echo "<br>";

	echo $nome;

	echo "<br>";

	echo ucwords($nome); // A primeira letra de cada palavra fica maiuscula

	echo "<br>";

	echo ucfirst($nome); // Apenas a primeira letra fica maiuscula

	echo "<br>";

	//////////////////////////////////////////////////////////////////

	$empresa = "hcode";


	$empresa = str_replace("o", "0", $empresa); // Subistitui o primeiro caractere pelo segundo na variavel.
	$empresa = str_replace("e", "3", $empresa);

	echo $empresa;

	echo "<br>";

	////////////////////////////////////////////////////////////////////

	$frase = "A repetição é a mãe da retenção."

	$palavra = "mãe";

	$q = strpos($frase, $palavra);

	$texto = substr($frase, 0, $q); // Pega do elementos do inicial até o final e exclui os restantes.

	var_dump($texto);

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // strlen conta o numero de caracters da variável.

	echo "<br>";

	var_dump($texto2);

?>