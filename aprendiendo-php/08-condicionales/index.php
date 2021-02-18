<?php

//Condicionales 
/*
 * Operadores de comparación 
 * == IGUAL 
 * === IDENTICO
 * != DISFERENTE
 * <> DIFERENTE
 * |== NO IDENTICO
 * < MENOR QUE
 * > MAYOR QUE
 * <= MENOR IGUAL QUE
 * >= MAYOR IGUAL QUE
 */
// Ejemplo 1 y 2
$color = "verde";

if($color == "rojo"){
    echo 'El color es rojo';
}
else{
    echo 'El color no es rojo';
}
echo '<br>';

$year = 2019;

if($year != 2019)
{
    echo 'Es un año diferente a 2019';
}
else
{
    echo 'Estamos en 2019';
}

// Ejemplo 3
$nombre = "David";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 49;
$mayoria_edad = 18;

if($edad >= $mayoria_edad)
{
    echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';
    
    if($continente == "Europa")
    {
        echo '<h2>'.'y es de '.$ciudad.'</h2>';
    }
    else
    {
        echo 'No es Europa';
    }
}
else
{
    echo '<h2>'.$nombre.' no es mayor de edad'.'</h2>'.'<br>';
}
echo '<hr>';
// Ejemplo 4
// else if
$dia = 4;

if($dia == 1)
{
    echo 'Es lunes';
}elseif ($dia == 2)
{
    echo ' Es Martes';
}
elseif ($dia == 3)
{
    echo 'Es Miércoles';
}
elseif ($dia == 4)
{
    echo 'Es Jueves';
}
else
{
    echo 'Es Viernes';
}
echo '<hr>';
// Ejemplo 5
/*Operadores Lógicos
 * && -> AND
 * || -> OR
 * ! -> NOT
 * 
 */

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 66;

if($edad_oficial >= $edad1  && $edad_oficial <= $edad2)
{
    echo ' Esta en edad de trabajar';
}
else
{
    echo 'No puede trabajar';
}
echo '<br>'.'<hr>';
$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia")
{
    echo ' En este país se habla español';
}
 else
 {
     echo 'No se habla español';
 }
 
 echo '<br>'.'<hr>';
 // SWITCH
 
 $dia = 6;
 
 switch($dia)
 {
     case 1: 
         echo 'Lunes';
         break;
     case 2:
         echo 'Martes';
         break;
     case 3: 
         echo 'Miercoles';
         break;
     case 4:
         echo ' Jueves';
         break;
     case 5: 
         echo ' Viernes';
         break;
     default :
         echo 'Es fin de semana'; 
}
echo '<br>'.'<hr>';
//GOTO
goto marca;
echo '<h3>'.'Instrucción 1'.'</h3>';
echo '<h3>'.'Instrucción 2'.'</h3>';
echo '<h3>'.'Instrucción 3'.'</h3>';
echo '<h3>'.'Instrucción 4'.'</h3>';

marca: 
    echo '<h1>'.' Me he saltado 4 echos'.'</h1>';

?>

