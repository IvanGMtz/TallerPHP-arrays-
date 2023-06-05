<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    $Galaxia= array(
        array("Sol", "Mercurio", "Venus", "Tierra", "Marte"),
        array("Marte", "Jupiter", "Saturno", "Urano", "Neptuno"),
        array("Venus", "Tierra", "Marte", "Jupiter", "Saturno"),
        array("Sol", "Mercurio", "Saturno", "Urano", "Neptuno")
    );
    echo "<h3>Planetas en Común</h3>";
    echo "<br>";
    $array1 = $Galaxia[$_POST["SisSolar"]];
    $array2 = $Galaxia[$_POST["SisSolar2"]];
    $resultado = array_intersect($array1, $array2);
    print_r(array_values($resultado));