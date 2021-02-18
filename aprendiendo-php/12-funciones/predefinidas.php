<?php

$nombre = "hola";
// Debuguear
var_dump($nombre);

// Date
echo date('d-m-Y').'<br/>';
echo time().'<br/>'.'<hr/>';

// funciones matemáticas
echo 'Raíz cuadrada de 10'. sqrt(10);
echo '<br/>'.'<hr/>';
echo 'Número aleatorio entre 10 y 40: '. rand(10,40);
echo '<br/>'.'<hr/>';
echo 'Número PI: '. pi();
echo '<br/>'.'<hr/>';
echo 'Redondear: '. round(7.891234,2);
echo '<br/>'.'<hr/>';
echo gettype($nombre);
echo '<br/>'.'<hr/>';
if(is_string($nombre))
{
    echo 'Esa variable es String';
}
echo '<br/>'.'<hr/>';
if(!is_float($nombre))
{
    echo 'Se necesita una variable con punto decimal';
}
echo '<br/>'.'<hr/>';
if(isset($edad))
{
    echo 'La variable existe';
}
else
{
    echo 'La variable no existe';
}
echo '<br/>'.'<hr/>';
$frase = '        mi contenido          ';
echo $frase;
var_dump(trim($frase)); // trim pára eliminar espacios por delante y atrás
echo '<br/>'.'<hr/>';
// Eliminar variables o indices de arrays
$year = 2020;
unset($year);
echo '<br/>'.'<hr/>';
// comprobar variable vacía
$texto = "";

if(empty($texto))
{
    echo 'La variable '.$texto.' esta vacia';
}
else
{
    echo 'La variable tiene contenido';
}
echo '<br/>'.'<hr/>';
// Contar caracteres de una cadena
$cadena = "12345";
echo strlen($cadena);
echo '<br/>'.'<hr/>';
// encontrar caracter
$frase = "la vida es bella";
echo strpos($frase, "vida");
echo '<br/>'.'<hr/>';
// Reemplazar cadena
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo '<br/>'.'<hr/>';
// Convertir a mayúsculas y minúsculas
echo strtolower($frase).'<br/>';
echo strtoupper($frase);
?>
