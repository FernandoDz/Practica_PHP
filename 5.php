<?php
//un vendedor ha hecho n ventas (este valor lo debe pedir) y desea saber cuantas de estas
//fueron de $400 o menos ; cuantas fueron mayores a $400 pero inferior a $800, y cuantas de $800 o superior
//a esa cantidad.haga el programa que le proporciona al vendedor esta informacion//

echo "Ingrese el número total de ventas: ";
$num_ventas = readline();

$count_menor_400 = 0;
$count_400_800 = 0;
$count_mayor_800 = 0;

for ($i = 0; $i < $num_ventas; $i++) {
  echo "Ingrese el precio de la venta " . ($i+1) . ": ";
  $precio = readline();

  if ($precio <= 400) {
    $count_menor_400++;
  } elseif ($precio < 800) {
    $count_400_800++;
  } else {
    $count_mayor_800++;
  }
}

echo "Ventas menores o iguales a $400: " . $count_menor_400 . "\n";
echo "Ventas entre $400 y $800: " . $count_400_800 . "\n";
echo "Ventas mayores a $800: " . $count_mayor_800 . "\n";

?>