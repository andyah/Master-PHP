<?php
/*
 * Tipos de datos:
 * - entero -> int/integer = 99
 * - Coma flotante/decimales -> float/double = 3,45
 * - Cadenas de caracter -> String = "texto"
 * - Booleano -> bool = 1 0 ó true o false
 * - null
 * - Arreglos/Vectores -> Array
 * - Objetos -< datos y funciones independientes
 */
/* En los texto se pueden usar \n, \r \t pero solamente se podrán ver en consola
   \n -> salto de linea,
 * \r -> retorno de carro,
 * \t -> tabulador
 * \" para ingresar comillas dobles dentro del string  */
/*
las variables no pueden iniciar por número, pero sí al final, no puede contener
 * guiones pero si guiones bajos, no puede contener signos, no puede contener
 * diagonales y tampoco ñ y síbolos raros */
$numero = 100;
$decimal = 27.9;
$texto = "Soy un texto $numero"; // Variables doble identifica que hay una variable sin tener que concatenar,
//  con commillas simples se debe concatenar con el punto

$verdadero = false;
$nula = null;

echo $texto.'<br>';
echo gettype($numero).'<br>';
echo gettype($decimal).'<br>';
echo gettype($texto).'<br>';
echo $verdadero.'<br>';
echo gettype($verdadero).'<br>';
echo gettype($nula);

// Debugear
$mi_nombre[] = "Andrea Aguilar";
$mi_nombre[] = "Andrea Aguilar";

var_dump($mi_nombre);

?>

