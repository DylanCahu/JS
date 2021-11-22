<?php

$tabCouleur=["red","blue","white"];
 
$A=$tabCouleur[rand(0,2)];
$B=$tabCouleur[rand(0,2)];
$C=$tabCouleur[rand(0,2)];

echo'{';
echo'"A" : "' .$A.'",';
echo'"B" : "' .$B.'",';
echo'"C" : "' .$C.'"';
echo'}';