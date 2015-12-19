<?php
/***************************************************************************************
-- EXERCÍCIO 1 --
Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
“Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
de ambos (3 e 5), imprima “FizzBuzz”.

***************************************************************************************/
 
	for ($contador = 1; $contador <= 100; $contador++)	{
	
		if ($contador % 3 == 0 && $contador % 5 == 0)	{
			echo "FizzBuzz <br />";
		} 
		
		else if ($contador % 3 == 0)	{
			echo "Fizz <br />";
		}
		 
		else if ($contador % 5 == 0)	{
			echo "Buzz <br />";
		} 
		
		else {
			echo "$contador <br />";
		}
		
	}
	
	
?>

