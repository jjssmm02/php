<?php
	
	$nome = "hcode";

	echo $nome = ." mais alguma coisa";

	$nome .= " Treinamentos";

	echo $nome;

	echo "<br>";

	//////////////////////////////////////////////

	$valorTotal = 0;

	$valorTotal +=100;

	$valorTotal +=25; // Acrécimo

	$valorTotal -=10; // Decrécimo

	$valorTotal *= .1; //  10 % do valor

	echo $valorTotal;

	echo "<br>";

	/////////////////////////////////////////////

	$a = 10;
	$b = 2;

	echo $a + $b;

	echo "<br>";

	echo $a - $b;

	echo "<br>";

	echo $a * $b;

	echo "<br>";

	echo $a / $b;

	echo "<br>";

	echo $a % $b;

	echo "<br>";

	echo $a ** $b;

	////////////////////////////////////////////////////////////////////

	$a = 30;

	$b = 55;

	$c = 55.0;

	var_dump( $a > $b);

	echo "<br>";

	var_dump( $a < $b);

	echo "<br>";

	var_dump( $c == $b); // Compara apenas o valor

	echo "<br>";

	var_dump( $c === $b); // Compara o valor e o tipo

	echo "<br>";

	var_dump( $c != $b); // Validar apenas o valor

	echo "<br>";

	var_dump( $c !== $b); // Validar tambem o tipo de dado

	//////////////////////////////////////////////////// spaceship recurso *php7*

	$a = 50;

	$b = 35;

	var_dump($a <=> $b); // se o A for maior retorna 1, se forem iguais retorna 0, se o B for maior retorna -1

   	///////////////////////////////////////////////////////////////////////// ?? *php7*

   	$a = NULL;

   	$b = NULL;

   	$c = 10;

   	echo $a ?? $b ?? $c; // ?? = Retorna A mas se A for nulo retorna B mas se B for nulo retorna C 

   	///////////////////////////////////////////////////////////////////////////

   	$a = 10;

   	echo $a++; // Vai exibir o valor de A e depois somar mais 1.

   	echo "<br>";

   	echo ++$a; // Vai somar mais 1 e depois vai exibir o valor de A.

   	echo "<br>";

   	echo --$a;

   	/////////////////////////////////////////////////////////////////////////

   	$resultado = (10 + 3) / 2 > 5 || 10 + 5 <3;

   	echo resultado;



?>