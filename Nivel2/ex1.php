<?php
 /*Exercici 1
 Crea un programa que contingui dos arrays de nombres enters/floats.
  Un cop creats, mostra per pantalla el resultat de:
 
 La intersecció dels dos arrays (nombres en comú)
 La mezcla dels dos arrays.*/

$numEntero1 = [1,3,4,6,9,11,14];
$numEntero2 =[1,2,5,6,10,14,17];
//array_intersect — Calcula la intersección de arrays
 $numIgual = array_intersect ($numEntero1, $numEntero2);
 //combinar las dos arrays: array_merge (no elimina los nums duplicados(?)
 $numMerge = array_merge($numEntero1, $numEntero2);
 //eliminar los numeros repetidos
 $numRepes = array_unique($numMerge);
 //reordenamos con array_values
 $arrayFinal = array_values($numRepes);

 //imprimir los resultados

echo "Array 1:" . "</br>";
print_r($numEntero1);
echo  "</br>";

echo "Array 2:" . "</br>";
print_r($numEntero2);
echo  "</br>";

echo "Iguales:" . "</br>";
print_r($numIgual);
echo "</br>";

echo "Mezcla:" . "</br>";
print_r($numMerge);
echo "</br>";

// un bucle for each para imprimir todos los numeros de la nummerge
foreach($arrayFinal as $num){
    echo "$num". "</br>";
}
?>