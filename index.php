hola mundo
<html>
<head>
	<title></title>
</head>
<body>
	<!para comentar>
<h1>hola mundo</h1> 
</body>
</html>

<?php
$nombre="Cynthia";
echo '<h2>Hola PHP soy $nombre </h2>';
echo "<h2>Hola PHP soy $nombre </h2>";
echo '<h2>Hola PHP soy '.$nombre ."</h2>";
echo "<br>";

echo (rand() ."<br>");
echo(rand(10,12));
echo "<br>";
echo "<br>";


$veces=10;
for ($i=0; $i < $veces; $i++) { 
	# code...
	echo(rand(10,100));
	echo "<br>";
}

?>