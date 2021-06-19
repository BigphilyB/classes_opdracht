<?php

include_once 'vierkant.class.php';
include_once 'cilinder.class.php';
include_once 'figuur.class.php';



$Vierkant = new Vierkant(5);
echo $Vierkant->oppervlakteVierkant;
echo "<br>";


$Cilinder = new Cilinder(3, 10);
echo $Cilinder->inhoudCilinder;
echo "<br>";


$Driehoek = new Driehoek(5, 10);
echo  $Driehoek->oppervlakteDriehoek;
