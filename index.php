<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    $planetas= array("Sol", "Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno");

    echo "<h3>Planeta a explorar</h3>";
    print_r(array_rand(array_flip($planetas), 1));