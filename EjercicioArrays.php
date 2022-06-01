<?php


//Recoger Array

$array=$_POST["array"];
$ent1=$array["ent1"];
$ent2=$array["ent2"];
$ent3=$array["ent3"];
$ent4=$array["ent4"];
$ent5=$array["ent5"];
$operador = $_POST["operacion"];

//Funciones
function cuenta($array){
    print_r(count($array));
    
}

function eliminar($array){
    unset($array["ent5"]);
    print_r($array);
    
}

function añade($array){
    $array["ent6"] = "jejejejeje";
    print_r($array);
}


switch ($operador) {
    case 'contar':
        cuenta($array);
        break;

    case 'eliminar':
         eliminar($array);
         break;
    
    case 'añadir':
         añade($array);
        break;

    }

?>