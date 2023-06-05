<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;
    $planetas= array("Sol", "Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno");
    if($_POST["orden"]=="0"){
        print_r($planetas);
    }else{
        print_r(array_reverse($planetas));
    };