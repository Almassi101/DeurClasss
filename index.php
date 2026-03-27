<?php
include 'deur.php';   //load the deur class
$mijnDeur = new Deur("Voordeur");     //create a door object 

echo $mijnDeur->sleutelGebruiken("rechts") . "<br>";  // try to turn key right
echo $mijnDeur->deurOpenen() . "<br>";                // try to open the door
echo $mijnDeur->doorDeurLopen() . "<br>";             // try to walk through the door
