<?php

	for ($i=0; $i < 1000; $i+=5) { 

		if ($i > 200 && $i < 800) continue; //não faz mais nada caso a instrução seja verdadeira
		
		//echo $i ."<br>";
	}

	//////////////////////////////////////////////////////////////////////////

	echo "<select>";

	for ($i=date("Y"); $i > date("Y")-100 ; $i--) {

		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo "</select>";
?>