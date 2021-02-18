<?php

/* 
 * Programa que tenga array con 8 números, recorrerlo y mostrarlo, ordenarlo y
 * mostrarlo, mostrar longitud y buscar un elemento
 */
$numeros = array(1,2,3,4,5,6,7,8);

function mostrarArray($numeros)
{
    $resultado = "";
    foreach ($numeros as $numero)
    {
        $resultado .= $numero.'<br/>';
    }
    return $resultado;
}

echo mostrarArray($numeros);
echo '<br/>'.'<hr/>';
sort($numeros);
echo mostrarArray($numeros);
echo '<br/>'.'<hr/>';
echo 'Número de elementos: '.count($numeros);
echo '<br/>'.'<hr/>';
$buscar = 5;
$busqueda = array_search($buscar, $numeros);

if(!empty($busqueda))
{
    echo '<h3>'.'El número existe en el array'.'</h3>';
}
else
{
    echo 'No existe el número';
}
?>

