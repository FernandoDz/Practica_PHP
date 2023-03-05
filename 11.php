<?php
//un obrero necesita calcular su salario si trabaja 40h o menos se paga 4 dolares por hora si es mas de 40 se le agregara 6 dolares extra

$horas_trabajadas = (int) readline("Ingrese el número de horas trabajadas: ");

if ($horas_trabajadas <= 40) {
    $salario = $horas_trabajadas * 4;
} else {
    $salario = 40 * 4 + ($horas_trabajadas - 40) * 6;
}

echo "El salario del obrero es: $" . $salario;
?>
