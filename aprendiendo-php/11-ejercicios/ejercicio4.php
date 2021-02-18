<?php

/* 
 * Recoger dos numeros por URL, realizar operaciones con esos números
 */

if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
    // Cambiar tipo de dato
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];
    
    echo '<h1>'.'Calculadora'.'</h1>';
    echo 'Suma: '.($numero1+$numero2).'<br/>';
    echo 'Resta: '.($numero1-$numero2).'<br/>';
    echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
    echo 'Division: '.($numero1/$numero2).'<br/>';
    echo 'Modulo: '.($numero1%$numero2).'<br/>';
    
}
else
{
    echo 'Introduce los números por la URL';
}
?>

