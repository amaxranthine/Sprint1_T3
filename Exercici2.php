/** $X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de array anterior -- count()
i posteriorment elimina un element de array anterior.--array_pop()
 Després d'eliminar l'element, les claus senceres han de ser normalitzades
 (han de reorganitzar els seus índexs).-- array_values()
 Mostra per última vegada la mida de array.
 */
 
 <?php
$x = [10, 20, 30, 40, 50,60];
    $mida = count($x);
    print_r($mida); 

//eliminar un elemento
    unset ($x[2]);
    var_dump($x);
    print_r($x);
//Normalitzar claus
    $v = array_values($x);
    print_r($x);
//mostrar la mida
    $m = count($x);
    print_r($m); 
 ?>