<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    $TipoNaves= array("sobrevuelo", "orbiter", "atmosferica", "penetradora", "observatorio", "comunicaciones", "lander", "rover");
    //Tipos de Naves según Community Dereum Labs
    $nave= strtolower($_POST["nave"]);
    if (array_key_exists($nave, array_flip($TipoNaves))){
        echo "Si existe la nave {$nave}";
    }else{
        echo "No existe la nave {$nave}";
    };