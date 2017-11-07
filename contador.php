<? php
$tiempo_inicio=microtime(true);

$contador=0;
while ($contador < 1000000)
{
	$contador = $contador +1;
	echo $contador . "\n";
}
$tiempo_fin=microtime(true);

echo "Tiempo de ejecución:"."\n".($tiempo_fin - $tiempo_inicio)."segundos"."\n";
?>