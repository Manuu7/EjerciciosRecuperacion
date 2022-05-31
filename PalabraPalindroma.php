<?php

$textt = $_POST["texto"];

if ($textt == strrev($textt)) {
    print "El texto introducido: ".$textt." es palíndromo";
}
else {
    print "El texto introducido: ".$textt." NO es palíndromo";
}

?>