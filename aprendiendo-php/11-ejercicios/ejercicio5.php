<?php

/* 
 * Programa que muestre todos los número entre 2 número que se ingresen por
 * URL
 */

if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
    // Cambiar tipo de dato
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];
    
if($numero1 < $numero2)
{
       for($i = $numero1; $i <= $numero2; $i++)
        {
            echo '<h3>'.$i.'</h3>';
        } 
}
else
{
    echo 'El número 1 debe ser menor a número 2'; 
}

    
}
else
{
    echo '<h2>'.'Introduce los números por la URL'.'</h2>';
}
?>

