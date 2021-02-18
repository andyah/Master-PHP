<?php

/* 
 * comprobar si una variable esta vacia y si lo esta llenarla con texto e
 * minusculas y mostrar en mayúsculas y negritas 
 */
$texto = "";

if(empty($texto))
{
    $texto = "hola, variable llena";
    echo '<strong>'.strtoupper($texto).'</strong>';
}
else
{
    echo 'La variable tiene contenido';
}

?>

