<?php 

buscar(3);


function buscar($num)
{
	$cubo=$num**3;
	$primer_par=1;
	$suma=0;
	$buscando=true;
	$i=1;
	$cont=0;
	do {

		if ($i%2==1) {
			$suma=$suma+$i++;
			echo $i."<br>";
			$cont++;
		} 
		
		if ($suma==$cubo||$suma>$cubo) {
				$buscando=false;
			}

		if ($cont==2) {
			$primer_par=$i;
		} else {
			# code...
		}
		


			
	} while ($buscando);
	for ($i=0; $buscando; $i++) { 
		


		}
	}



 ?>