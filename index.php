<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    $planetas= array("sol", "mercurio", "venus", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno");

    $Planeta= strtolower($_POST["planeta"]);
    if (array_key_exists($Planeta, array_flip($planetas))){
        echo "Si existe el planeta {$Planeta}";
    }else{
        echo "No existe el planeta {$Planeta}";
    };