<?php
//crear un array que almacene los siguientes valores 100,8,5,20,15,63,6,9,2,1,5,3,4,7,9,102,88,64 y los ordene de menor a mayor

$numeros= array(100,8,5,20,15,63,6,9,2,1,5,3,4,7,9,102,88,64);
    sort($numeros);
    foreach($numeros as $Numero_Or){
        echo $Numero_Or . "\n";
    }

?>