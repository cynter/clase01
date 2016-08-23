

<?php
$veces=1000000;

$cont0=0;
$cont1=0;
$cont2=0;
$cont3=0;
$cont4=0;
$cont5=0;
$cont6=0;
$cont7=0;
$cont8=0;
$cont9=0;

for ($i=0; $i < $veces; $i++) {
$random=rand(0,9);

switch ($random) {
	case 0;
		
		$cont0++;
		break;

	case 1;
		# code...
		$cont1++;
		break;

	case 2;
		# code...
		$cont2++;
		break;

	case 3;
		# code...
		$cont3++;
		break;

	case 4;
		# code...
		$cont4++;
		break;

	case 5;
		# code...
		$cont5++;
		break;

	case 6;
		# code...
		$cont6++;
		break;

	case 7;	

	if ((($cont7*100)/$veces)<5){
    	$cont7++;
    	break;
	}
	else 
	{
		$i--;
		continue;
	} 	
		

	case 8;
		# code...
		$cont8++;
		break;

	case 9;
		# code...
		$cont9++;
		break;

	
	default:
		# code...
		break;
}

}

echo "El numero aparecio ".($cont0*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont1*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont2*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont3*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont4*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont5*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont6*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont7*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont8*100)/$veces ."%<br>";
echo "El numero aparecio ".($cont9*100)/$veces ."%<br>";




?>