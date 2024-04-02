<?php

// Definimos el array de palabras y el carácter a buscar
$paraules = ["hola", "Php", "Html"];
$caracter = "h";

// Definimos la función de búsqueda
function busqueda($caracter, $paraules) {
    foreach ($paraules as $paraula) {  // Iteramos sobre cada palabra en el array
        // Verificamos si el carácter está en la palabra
        // La comprobación debe ser !== false, porque strpos puede retornar 0 si el carácter está al inicio de la palabra
        if (strpos(strtolower($paraula), strtolower($caracter)) === false) {
            return false;  // Si el carácter no está en alguna palabra, retornamos false
        }
    }
    return true;  // Si todas las palabras contienen el carácter, retornamos true
}

// Llamamos a la función de búsqueda y almacenamos el resultado
$resultat = busqueda($caracter, $paraules);

// Preparamos la respuesta basada en el resultado de la búsqueda. uso un ternario o un if
//$resposta = $resultat ? "S'ha trobat la lletra $caracter a totes les paraules" : "No s'ha trobat la lletra $caracter a totes les paraules";
// Preparamos la respuesta basada en el resultado de la búsqueda
if ($resultat) {
    $resposta = "S'ha trobat la lletra $caracter a totes les paraules";
} else {
    $resposta = "No s'ha trobat la lletra $caracter a totes les paraules";
}
// Imprimimos la respuesta
echo $resposta;

?>