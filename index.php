

<?php
$veces=10;

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
		# code...
		$cont7++;
		break;

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

echo "El numero aparecio ".($veces*$cont0)/100 ."%";
echo "El numero aparecio ".($veces*$cont1)/100 ."%";
echo "El numero aparecio ".($veces*$cont2)/100 ."%";
echo "El numero aparecio ".($veces*$cont3)/100 ."%";
echo "El numero aparecio ".($veces*$cont4)/100 ."%";
echo "El numero aparecio ".($veces*$cont5)/100 ."%";
echo "El numero aparecio ".($veces*$cont6)/100 ."%";
echo "El numero aparecio ".($veces*$cont7)/100 ."%";
echo "El numero aparecio ".($veces*$cont8)/100 ."%";
echo "El numero aparecio ".($veces*$cont9)/100 ."%";


?>