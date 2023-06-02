<?php

$planetas= array(
    "Luna"=>array("masa" =>7.349*(10**22), "radio"=> 1.7374*(10**6)),
    "Mercurio"=>array("masa" =>3.285*(10**23), "radio"=> 2.4397*(10**6)), 
    "Venus"=>array("masa" =>4.867*(10**24), "radio"=> 6.0518*(10**6)), 
    "Tierra"=>array("masa" =>6.01*(10**24), "radio"=> 6.375*(10**6)), 
    "Marte"=>array("masa" =>6.4*(10**23), "radio"=> 3.4*(10**6)), 
    "Jupiter"=>array("masa" =>1.9*(10**27), "radio"=> 7.1*(10**7)), 
    "Saturno"=>array("masa" =>5.7*(10**26), "radio"=> 6.0*(10**7)), 
    "Urano"=>array("masa" =>8.7*(10**25), "radio"=> 2.6*(10**7)), 
    "Neptuno"=>array("masa" =>1.0*(10**26), "radio"=> 2.5*(10**7)));
echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;
    $G=6.672*(10**-11);
    // print_r(count($planetas));
    $Filtro= array_values($_POST)[0];
    
    $gravedad=$G*($planetas[$Filtro]["masa"]/($planetas[$Filtro]["radio"])**2);
    print_r(number_format($gravedad, 2));