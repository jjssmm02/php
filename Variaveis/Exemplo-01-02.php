<?php
	
	$nome = "Miguel";

	$sobreNome = "Marçola";

	var_dump($nome);

	$nomeCompleto = $nome . " " . $sobreNome;

	echo "<br>";

	echo $nomeCompleto;

	exit;
	
	unset($nome);

	if (isset($nome)){
		echo $nome;
	}
?>