<?php
//dado el suiguiente array

//agregar tres frutas al arreglo y eliminar el valor de banana en el arreglo
$fruta = array("banana", "pera", "melocoton");
array_push($fruta, "uva","piña");

$canasta = array_search("banana",$fruta);

array_splice($fruta,$canasta,1);
foreach($fruta as $frutas){
    echo $frutas . " ";
}
?>

