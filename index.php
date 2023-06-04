<?php

    echo <<<HTML
    <br><a href="index.html">Volver</a><br>
    HTML;
    echo "<h3>Masa Total</h3>";
    $TotalMasa= array_sum($_POST);
    print_r(number_format($TotalMasa, 2));