<?php
/* Variables locales -> se definen dentro de una función y no pueden
 *  ser usadas fuera de la misma, disponibles si se hace return*/

/* Variables globales -> se declara fuera de una función, disponibles
 *  en todo momento*/

$frase = "Ni lo genios son tan genios, ni los mediocres son tan mediocres";
echo $frase;

function holaMundo()
{
    global $frase;
    
    echo '<h1>'.$frase.'</h1>';
    
    $year = 2019;
    return $year;
}

echo holaMundo();

echo '<br/>'.'<hr>';
// Funciones variables
function buenasDias()
{
    return 'Hola buenos días';
}

function buenasTardes()
{
    return 'Qué tal ha ido la comida?';
}

function buenasNoches()
{
    return 'Te vas a dormir ya?';
}
$horario = "Dias";
//$horario = $_GET['horario'];

$mi_funcion =  'buenas'.$horario;

echo $mi_funcion();

?>

