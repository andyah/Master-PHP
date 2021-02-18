<?php
// Funciones
$cantantes = ['2pack', 'Drake', 'Jennifer Lopez','Alfredo'];
$numeros = [1,2,3,4,5,8];
// Ordenar Arrays
asort($cantantes); // Ascendente
var_dump($cantantes);
echo '<br/>'.'<hr/>';
arsort($cantantes); //Descendente
var_dump($cantantes);
echo '<br/>'.'<hr/>';
sort($cantantes);
sort($numeros);
var_dump($numeros);
var_dump($cantantes);
echo '<br/>'.'<hr/>';
$cantantes[] = 'Natos';
var_dump($cantantes);
echo '<br/>'.'<hr/>';
array_push($cantantes, 'Waor');
var_dump($cantantes);
array_pop($cantantes);
unset($cantantes[3]);
var_dump($cantantes);
echo '<br/>'.'<hr/>';
// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo '<br/>'.'<hr/>';
// Dar la vuelta a un array
var_dump(array_reverse($numeros));
echo '<br/>'.'<hr/>';
//Buscar dentro de un array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);
echo '<br/>'.'<hr/>';
// Contar elementos
echo count($cantantes).'<br/>';
echo sizeof($cantantes);



?>