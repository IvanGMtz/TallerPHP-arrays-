<?php

$planetas= array("Sol" =>false, "Mercurio"=>false, "Venus"=>true, "Tierra"=>true, "Marte"=>true, "Jupiter"=>false, "Saturno"=>false, "Urano"=>false, "Neptuno"=>false);
echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;

    // print_r(count($planetas));
    $Filtro= array_values($_POST)[0];
    if($Filtro=="true"){
        $Resultado=array_filter($planetas, function($v, $k) {
            return $v == true;
        }, ARRAY_FILTER_USE_BOTH);
    }else{
        $Resultado=array_filter($planetas, function($v, $k) {
            return $v == false;
        }, ARRAY_FILTER_USE_BOTH);
    };
    

    print_r(array_keys($Resultado));