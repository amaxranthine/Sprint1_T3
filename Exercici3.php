/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter.
 La funció ens retorna true si totes les paraules de array tenen el caràcter 
 passat com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

<?php


function todasContienenCaracter($arrayDePalabras, $caracter) {
    // recorremos la array
    for ($i = 0; $i < count($arrayDePalabras); $i++) {
        // Verificamos si la palabra no contiene el carácter
        if (strpos($arrayDePalabras[$i], $caracter) === false) {
            // Si encontramos una palabra que no contiene el carácter, retornamos falso
            return false;
        }
    }
    // Si todas las palabras contienen el carácter, retornamos "true".
    return true;
}

// Ejemplo de uso
$arrayDePalabras = ["hola", "Php", "Html"];
$caracter = "h";

// Llamamos a la función y mostramos el resultado
if (todasContienenCaracter($arrayDePalabras, $caracter)) {
    echo "Todas las palabras contienen el carácter '$caracter'.";
} else {
    echo "No todas las palabras contienen el carácter '$caracter'.";
}
?>