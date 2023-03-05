<?php

$empleados = array (
array ("Nombre"=> "Pepe", "añosServ"=>3),
array ("Nombre"=> "Domingo", "añosServ"=>7),
array ("Nombre"=> "Pepe", "añosServ"=>4),
array ("Nombre"=> "Pepe", "añosServ"=>3),
array ("Nombre"=> "Pepe", "añosServ"=>3),
array ("Nombre"=> "Pepe", "añosServ"=>5),
array ("Nombre"=> "Pepe", "añosServ"=>5),
array ("Nombre"=> "Pepe", "añosServ"=>7),
array ("Nombre"=> "Pepe", "añosServ"=>10),
array ("Nombre"=> "Pepe", "añosServ"=>9),
array ("Nombre"=> "Pepe", "añosServ"=>18),

);

$salario =365;
$aumento1 =25;
$aumento2=50;
$aumento3=100;
$aumento4=150;

foreach($empleados as $empleado){

    $nombre =$empleado["Nombre"];
    $años_de_servicio = $empleado["añosServ"];
    if($años_de_servicio>=1 && $años_de_servicio <=5){
        $aumento = $salario + $aumento1;
        echo "\n"."aumento =".$aumento1;

    } elseif ($años_de_servicio >5 && $años_de_servicio <=10){
         $aumento = $salario + $aumento2;
         echo "\n"."aumento =".$aumento2;

    }elseif ($años_de_servicio >10 && $años_de_servicio<=20){
        $aumento = $salario + $aumento3;
        echo "\n"."aumento =".$aumento3;

    }
    elseif  ($años_de_servicio>20)
    {
        $aumento = $salario +$aumento4;
        echo "\n"."aumento =".$aumento4;
    }
    echo "nombre empleado =".$nombre. "salario"."\n"."salario y aumento es igual= ".$aumento;

};

?>