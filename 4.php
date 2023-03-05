<?php
//ejercicio de 50 empleados que necesitan realizar un aumento//
$años_de_servicio = array();
for ($i = 0; $i < 50; $i++) {
    $años_de_servicio[$i] = rand(1, 30);
}

for ($i = 0; $i < 50; $i++) {
    $años = $años_de_servicio[$i];
    if ($años < 5) {
        $aumento = 25;
    } else if ($años >= 5 && $años < 10) {
        $aumento = 50;
    } else if ($años >= 10 && $años < 20) {
        $aumento = 100;
    } else {
        $aumento = 150;
    }
    $nuevo_salario = 1000 + $aumento;
  
    
  echo "Trabajador #" . ($i+1) . ":<br>";
  echo "Años de servicio: " . $años . "<br>";
  echo "Salario anterior: $1000<br>";
  echo "Aumento salarial: $" . $aumento . "<br>";
  echo "Nuevo salario: $" . $nuevo_salario . "<br><br>";
}
?>
