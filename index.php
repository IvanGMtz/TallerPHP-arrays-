<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    $extraterrestres= array("marciano", "ashtar", "dropa", "gris", "reptiloide");
    array_push($extraterrestres, $_POST["0"], $_POST["1"], $_POST["2"]);
    echo "<h3>Especies Alienígenas</h3>";
    array_unique($extraterrestres);
    print_r($extraterrestres);