<?php

$planetas= array("Sol", "Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno");
echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    // print_r(count($planetas));
    $Numero=array_values($_POST)[0];
    print_r($planetas[$Numero]);
?>