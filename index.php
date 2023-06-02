<?php

$planetas= array("Sol", "Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno");
echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    // print_r(count($planetas));
    $Cantidad=array_values($_POST)[0];
    $SistSolar=array_fill(0, $Cantidad, "Deshabilitado"); 
    print_r($SistSolar);
?>