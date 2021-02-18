<?php

/* 
 * Imprimir los cuadrados de los primero 40 número enteros,
 * PD: utilizar bucle while 
 */

$numero = 0;

while($numero <= 40)
{
    $cuadrado = $numero*$numero;
    echo '<h3>'.'El cuadrado de '.$numero.' es: '.$cuadrado.'</h3>';
    $numero++;
}

echo '<br>'.'<hr>';
for($i = 0; $i <= 40; $i++)
{
    $cuad = $i*$i;
    echo '<h3>'.'El cuadrado de '.$i.' es: '.$cuad.'</h3>';
}
?>