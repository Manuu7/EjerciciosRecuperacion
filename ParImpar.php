<?php

#Recogida de datos.
$numero=$_POST["numeroo"];
$numero2=$_POST["numeroo2"];

if ($numero % 2== 0){
    echo "El Numero ". $numero. " es PAR.";
}else{
    echo "El Numero ". $numero. " es IMPAR.";
}
echo "<br>";

/*/
for ($i = 1 ; $i <= $numero2; $i++){
    print "$i, ";
}
/*/

$contador = 0;
$iteracion = 0;

while ($iteracion <= $numero2) {
    echo "<br>";
    echo "Iteración $iteracion: ". $numero++;
    $contador++;
    $iteracion++;

}




?>