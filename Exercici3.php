<?php
/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter.
 La funció ens retorna true si totes les paraules de array tenen el caràcter 
 passat com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/


$paraules = ["hola", "Php", "Html"];
$caracter = "h";

/**Luego, iteramos sobre el array 
 * $paraules usando un bucle foreach 
 * para imprimir cada palabra en una línea separada. */
foreach($paraules as $paraula){
    echo $paraula;
}
//echo "Lletra a buscar: $caracter" . "</br>";
//echo "</br>";

/** Llamar a la funcion busqueda. Los mensajes correspondientes */
$resultat = busqueda ($caracter , $paraules);
if($resultat == true){
    $resposta = "S'ha trobat la lletra $caracter a totes les paraules";
} else{
    $resposta = "No s'ha trobat la lletra $caracter";
} 
echo $resposta;  /**Imprimir el mensaje */

/**en la funcion busqueda recibe el array y el caracter*/
function busqueda ($caracter, $paraules){
    foreach($paraules as $paraula){                // usar el foreach para iterar por la array
    
        if(strpos($paraula, $caracter) !== false){      //usamos strpos para verificar si 'h' esta en la palabra
            return true;
        }
    }
    return false;
}
//in_array busca una palabra entera y no un solo caracter que es lo que nos interesa aqui 
?>