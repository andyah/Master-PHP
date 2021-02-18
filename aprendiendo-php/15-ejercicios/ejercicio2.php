<?php

/* Añadir valor a un array mientra su longitud sea menos a 120 
 * y mostrar en pantalla
 */

$arreglo = array();

for($i = 0; $i<= 120; $i++)
{
    array_push($arreglo, $i);
}

var_dump($arreglo)
?>

