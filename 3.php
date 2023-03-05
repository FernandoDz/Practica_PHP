<?php
//los 20 empleados de una fabrica trabajan en dos turnos; diurno o nocturno. Se desea calcular el salario diario de cada uno de los empleados de acuerdo con los siguientes puntos: la tarifa de horas diurnas es de $5 , la tarifa de horas nocturnas es de $10 , caso de ser domingo, la tarifa se pagara en $10 en el turno diurno y $20 en el turno nocturno//
$tarifa_diurna_laboral = 5;
$tarifa_nocturna_laboral = 10;
$tarifa_diurna_domingo = 10;
$tarifa_nocturna_domingo = 20;

for ($i = 1; $i <= 20; $i++) {

    //funcion para generar un numero aleatorio//
    $turno = rand(0, 1);

    $es_domingo = rand(0, 1);

    // Calcular el salario diario para este empleado
    if ($es_domingo) {
        if ($turno == 0) {
            $salario_diario = 8 * $tarifa_diurna_domingo;
        } else {
            $salario_diario = 8 * $tarifa_nocturna_domingo;
        }
    } else {
        if ($turno == 0) {
            $salario_diario = 8 * $tarifa_diurna_laboral;
        } else {
            $salario_diario = 8 * $tarifa_nocturna_laboral;
        }
    }
    echo "Empleado #" . $i . ": Turno " . ($turno == 0 ? "diurno" : "nocturno") . ", " . ($es_domingo ? "es domingo" : "no es domingo") . ". Salario diario: $" . $salario_diario . "<br>";
}
?>
