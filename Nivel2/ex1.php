<?php
 /*Exercici 1
 Crea un programa que contingui dos arrays de nombres enters/floats.
  Un cop creats, mostra per pantalla el resultat de:
 
 La intersecció dels dos arrays (nombres en comú)
 La mescla dels dos arrays.*/

$numEntero1 = [1,3,4,6,9];
$numEntero2 =[1,2,5,6,10];
//array_intersect — Calcula la intersección de arrays
 $numIgual = array_intersect ($numEntero1, $numEntero2);
 //combinar las dos arrays: array_merge
 $numMerge = array_merge($numEntero1, $numEntero2);
 
 //imprimir los resultados

 echo "Array 1:" . "</br>";
 print_r($numEntero1);
 echo  "</br>";
 
 echo "Array 2:" . "</br>";



?>