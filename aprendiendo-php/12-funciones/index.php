<?php
/* Funciones -> conjuntos de ordenes agrupadas por un nombre concreto y pueden
 * utilizarse invocando la funcion tantas veces como queramos
 */

function muestraNombres()
{
    echo 'Andrea Aguilar'.'<br/>';
    echo 'Victor Robles'.'<br/>';
    echo 'Noemi Hidalgo';
}

// Invocar funcion 
muestraNombres();

echo '<br/>'.'<hr>';

function tabla($numero)
{
    echo '<h3>'.' Tabla de multiplicar del número: '.$numero.'</h3>';
    
    for($i = 1; $i <= 10; $i++)
    {
        $operacion = ($numero*$i); 
        echo $numero.' x '.$i.' = '.$operacion.'<br/>';
    }
}

if(isset($_GET['numero']))
{
    tabla($_GET['numero']);
}
else
{
    echo 'No hay número para sacar la tabla';
}
 
echo '<br/>'.'<hr>';

for($i = 0; $i<= 10; $i++)
{
    tabla($i);
}
echo '<br/>'.'<hr>';
// Funcion con varios parametros
function calculadora($numero1, $numero2, $negrita = false)
{
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1/$numero2;
    $modulo = $numero1%$numero2;
    
    $cadena_texto = "";
    
    if($negrita)
    {
        $cadena_texto .= '<h1>';
    }
    
    $cadena_texto .= 'Suma = '.$suma.'<br/>';
    $cadena_texto .= 'Resta = '.$resta.'<br/>';
    $cadena_texto .= 'Multiplicacion = '.$multiplicacion.'<br/>';
    $cadena_texto .= 'Division = '.$division.'<br/>';
    $cadena_texto .= 'Modulo = '.$modulo.'<br/>';
    
    if($negrita)
    {
        $cadena_texto .= '</h1>';
    }
    
    return $cadena_texto;
    
}

echo calculadora(10, 30, true);

echo '<br/>'.'<hr>';

function devuelveNombre($nombre)
{
    return 'El nombre es: '.$nombre;
}

echo devuelveNombre("andrea");

echo '<br/>'.'<hr>';

// Funciones dentro de otras
function getNombre ($nombre)
{
    $texto = 'El nombre es: '.$nombre;
    return $texto;
}

function getApellido($apellidos)
{
    $texto = 'Los apellidos son: '.$apellidos;
    return $texto;
}
function devuelveElNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre).'<br/>'.getApellido($apellidos);
    return $texto;
}

echo devuelveElNombre("andrea", "aguilar");

?>

