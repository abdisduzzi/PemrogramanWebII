<?php
    $celsius = 37.841;
    $fahrenheit = 9/5 * $celsius + 32;
    $reamur = 4/5 * $celsius;
    $kelvin = $celsius + 273.150;

    echo "Fahrenheit (F) = ".number_format($fahrenheit, 4, ',')."<br>";
    echo "Reamur (R) = ".number_format($reamur, 4, ',')."<br>";
    echo "Kelvin (K) = ".number_format($kelvin, 3, ',')."<br>";
?>