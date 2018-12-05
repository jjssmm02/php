<?php
	
	$diaSemana = date("w"); //Retorna o dia da semana de 0 à 6

	switch ($diaSemana) {
		case 0:
			echo "Domingo";
			break;
		
		case 1:
			echo "Segunda";
			break;

		case 2:
			echo "Terça";
			break;
		
		case 3:
			echo "Quarta";
			break;

		case 4:
			echo "Quinta";
			break;

		case 5:
			echo "Sexta";
			break;

		case 6:
			echo "Sábado";
			break;	
	}

?>