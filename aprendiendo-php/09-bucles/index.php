<?php
/* Bucle WHILE -> Estructura de control que itera o repite la ejecución de una 
 serie de instrucciones tantas veces como sea necesario, con base a una condición
 */
$numero = 0;

while($numero <= 100)
{
    echo $numero;
    
    if($numero != 100)
    {
        echo ', ';
    }
    $numero++;
}
echo '<br>'.'<hr>';
// Ejemplo 
// isset -> comprueba si existe un dato o variable 
if(isset($_GET['numero']))
{
    // Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}
else
{
    $numero = 1;
}

echo '<h1>'.'Tabla de multiplicar del número '.$numero.'</h1>';

$contador = 1;

while($contador <= 10)
{
    echo $numero.'x'.$contador.' = '.($numero*$contador).'<br>';
    $contador++;
}

//var_dump($numero);

// do while -> la condicion se evalua al final 
echo '<br>'.'<hr>';

$edad = 18;
$contador = 1;

do
{
    // bloque de instrucciones
    echo 'Tienes acceso al local privado '.$contador.'<br>';
    $contador++;
}while($edad >= 18 && $contador <= 10);


?>
