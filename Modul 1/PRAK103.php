<?php
$celcius = 37.841;

$reamur = $celcius * 4 / 5;
$fahrenheit = ($celcius * 9 / 5) + 32;
$kelvin = $celcius + 273.15;

echo "Fahrenheit (F) = " . number_format($fahrenheit, 4) . "<br>";
echo "Reamur (R) = " . number_format($reamur, 4) . "<br>";
echo "Kelvin (K) = " . number_format($kelvin, 3) . "<br>";
