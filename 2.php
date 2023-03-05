<?php
//calcular el total a pagar por cada uno  de los primeros 10 clientes que llegan a una llanteria ,
 //si el precio de cada llanta es de $80 si se compran menos de 4 llantas y  $60 si se compran 4 o mas //

$precio_llanta = 80;

$descuento = 20;

for ($i = 1; $i <= 10; $i++) {
    
    $cantidad_llantas = rand(1, 10);

    if ($cantidad_llantas < 4) {
        $precio_total = $cantidad_llantas * $precio_llanta;
    } else {
        $precio_total = ($cantidad_llantas * $precio_llanta) - ($descuento * $cantidad_llantas);
    }

    echo "Cliente #" . $i . ": Compró " . $cantidad_llantas . " llantas. Total a pagar: $" . $precio_total . "<br>";
}
?>






?>