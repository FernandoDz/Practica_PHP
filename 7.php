<?php
//elaborar un programa que permita el ingreso de 100 numeros enteros, el programa debe de sumar los numeros multiplos de 3

$suma =0;
for ($i =1; $i <=100; $i++){
    echo "ingrese el entero" .$i .":";
    $number =(int) fgets(STDIN);
    
    $suma += ($number %3 ==0)? $number :0;

}

echo "la suma total de los numeros de multiplos de 3 es:", $suma ."\n";

?>