<?php

/* 
 * crear 4 variable array, string, int, boolean, que imprima un mensaje según
 * el tipo de la variable
 */
$numero = 456;
$cadena = "hola";
$bandera = true;
$arreglito = array('hola','como','estas');

if(is_int($numero))
{
    echo '<h4>'.'Esta es una variable de tipo: '.gettype($numero).' '.$numero.'</h4>';
}

if(is_string($cadena))
{
    echo '<h4>'.'Esta es una variable de tipo: '.gettype($cadena).' '.$cadena.'</h4>';
}

if(is_bool($bandera))
{
    echo '<h4>'.'Esta es una variable de tipo: '.gettype($bandera).' '.$bandera.'</h4>';
}
if(is_array($arreglito))
{
    echo '<h4>'.'Esta es una variable de tipo: '.gettype($arreglito).'</h4>';
    var_dump($arreglito);
}
?>

