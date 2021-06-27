<?php

include_once 'vierkant.class.php';
include_once 'cilinder.class.php';
include_once 'figuur.class.php';



$vierkant = new Vierkant(5);
echo $vierkant->oppervlakteVierkant, " is de oppervlakte van de vierkant";
echo "<br>";


$cilinder = new Cilinder(3, 10);
echo $cilinder->inhoudCilinder, " is de inhoud van de cilinder";
echo "<br>";


$driehoek = new Driehoek(5, 10);
echo  $driehoek->oppervlakteDriehoek, " is de oppervlakte van de driehoek";
