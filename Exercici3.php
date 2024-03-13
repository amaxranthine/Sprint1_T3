/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter.
 La funció ens retorna true si totes les paraules de array tenen el caràcter 
 passat com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

<?php
$paraules = [“hola”, “Php”, “Html”]; /*Iniciamos el array*/
$caracter = "h";

foreach($paraules as $paraula){
    echo $paraula;
}
?>