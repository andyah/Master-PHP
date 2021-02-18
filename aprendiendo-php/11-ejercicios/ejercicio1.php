<?php

/* 
 * Crear dos variables cuyo nombre sea pais y continente, inicializarlo
 * imprimirlo por pantalla con comentario explitativo del tipo de dato
 */

$pais = "Mexico";
$continente = "America";

echo '<h2>'.$pais.'</h2>'.'<br>';
echo '<h2>'.$continente.'</h2>'.'<br>';

echo 'El tipo de dato de "PAIS" es un : '. gettype($pais).'<br>';
echo 'El tipo de dato de "CONTINENTE es un: '. gettype($continente);
?>

