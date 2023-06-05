<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;
    $planetas=[
        "tierra"=>["satelites"=>["Luna"]],
        "marte"=>["satelites"=>["Fobos", "Deimos"]],
        "venus"=>["satelites"=>["Tritón", "Talasa"]]
    ];
    $planeta=array_pop($_POST);
    array_push($planetas[$planeta]["satelites"], array_values($_POST)[0], array_values($_POST)[1], array_values($_POST)[2]);
    echo "<pre>";
    print_r(array_unique($planetas[$planeta]["satelites"]));
