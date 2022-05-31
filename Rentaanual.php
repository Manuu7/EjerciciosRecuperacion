<?php

$sueldo=$_POST["operando1"];


if ($sueldo < 10000) {
    $resultado = $sueldo * (5/100);
    print "Tienes que pagar: ". $resultado. "<br>";
    print "Su tipo impositivo es de un 5% ". "<br>";
}

elseif ($sueldo > 10000 AND $sueldo < 20000) {
    $resultado = $sueldo * (15/100);
    print "Tienes que pagar: ". $resultado. "<br>";
    print "Su tipo impositivo es de un 15% ". "<br>";
}

elseif ($sueldo > 20000 AND $sueldo < 35000) {
    $resultado = $sueldo * (20/100);
    print "Tienes que pagar: ". $resultado. "<br>";
    print "Su tipo impositivo es de un 20% ". "<br>";
}

elseif ($sueldo > 35000 AND $sueldo <= 60000) {
    $resultado = $sueldo * (30/100);
    print "Tienes que pagar: ". $resultado. "<br>";
    print "Su tipo impositivo es de un 30% ". "<br>";
}

elseif ($sueldo > 60000) {
    $resultado = $sueldo * (45/100);
    print "Tienes que pagar: ". $resultado. "<br>";
    print "Su tipo impositivo es de un 45% ". "<br>";
}
?>