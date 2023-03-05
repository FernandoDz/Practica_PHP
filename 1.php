<?php
//dado un grupo de numeros (diferentes a cero ) realice un programa que permita determinar y dar como salida lo siguiente: cantidad de numeros mayores a 100 , cantidad de numeros negativos encontrados y promedio de positivos encontrados//
$numeros = [80, -50, 120, 200, -10, 70];


$cantidad_mayores_a_100 = 0;
$cantidad_negativos = 0;
$suma_positivos = 0;
$cantidad_positivos = 0;

foreach ($numeros as $numero) {
    if ($numero > 100) {
        $cantidad_mayores_a_100++;
    } elseif ($numero < 0) {
        $cantidad_negativos++;
    } else {
        $suma_positivos += $numero;
        $cantidad_positivos++;
    }
}

$promedio_positivos = $suma_positivos / $cantidad_positivos;

echo "Cantidad de números mayores a 100: $cantidad_mayores_a_100\n";
echo "Cantidad de números negativos: $cantidad_negativos\n";
echo "Promedio de números positivos: $promedio_positivos\n";
