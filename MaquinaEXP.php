<?php

#Recogida datos
$importe=$_POST["importe1"];
$cola=1.50;
$fanta=1.50;
$nestea=1.25;
$agua=1.00;
$redbull=1.75;
$chocobons=2.50;
$doritos=2.00;
$buscalios=1.85;
$selector=$_POST["operando"]

if ($importe > $cola) {
    resta($importe-$cola);
    echo "comprando una coca-cola";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $cola) {
    resta($cola-$importe);
    echo "comprando una coca-cola precio insuficiente";
    echo "te faltan: ". $res ;
}

if ($importe > $fanta) {
    resta($importe-$fanta);
    echo "comprando una fanta";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $fanta) {
    resta($fanta-$importe);
    echo "comprando una fanta precio insuficiente";
    echo "te faltan: ". $res ;
}

if ($importe > $nestea) {
    resta($importe-$nestea);
    echo "comprando una nestea";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $nestea) {
    resta($nestea-$importe);
    echo "comprando una nestea precio insuficiente";
    echo "te faltan: ". $res ;
}


if ($importe > $agua) {
    resta($importe-$agua);
    echo "comprando una agua";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $agua) {
    resta($agua-$importe);
    echo "comprando una agua precio insuficiente";
    echo "te faltan: ". $res ;
}


if ($importe > $redbull) {
    resta($importe-$redbull);
    echo "comprando una redbull";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $redbull) {
    resta($redbull-$importe);
    echo "comprando una redbull precio insuficiente";
    echo "te faltan: ". $res ;
}


if ($importe > $chocobons) {
    resta($importe-$chocobons);
    echo "comprando una chocobons";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $chocobons) {
    resta($chocobons-$importe);
    echo "comprando una chocobons precio insuficiente";
    echo "te faltan: ". $res ;
}


if ($importe > $doritos) {
    resta($importe-$doritos);
    echo "comprando una doritos";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $doritos) {
    resta($doritos-$importe);
    echo "comprando una doritos precio insuficiente";
    echo "te faltan: ". $res ;
}


if ($importe > $buscalios) {
    resta($importe-$buscalios);
    echo "comprando una buscalios";
    echo "la vuelta es ". $res ;
}

elseif ($importe < $buscalios) {
    resta($buscalios-$importe);
    echo "comprando una buscalios precio insuficiente";
    echo "te faltan: ". $res ;
}




switch ($selector) {
    case 'cola':
        resta($importe,$cola);
        break;
    
    case 'fanta':
        resta($importe,$fanta);
        break;
    
    case 'nestea':
        resta($importe,$nestea);
        break;
    
    case 'agua':
        resta($importe,$agua);
        break;
    
    case 'redbull':
        resta($importe,$redbull);
        break;

    case 'chocobons':
        resta($importe,$chocobons);
        break;

    case 'doritos':
        resta($importe,$doritos);
        break;

    case 'buscalios':
        resta($importe,$buscalios);
}


?>