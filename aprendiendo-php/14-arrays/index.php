<?php

/* Array -> colección de datos 
 */
$pelicula = "batman";
$peliculas = array('Batman','Spiderman');
$cantantes = ['2pack', 'Drake', 'Jennifer Lopez'];

echo '<h1>'.'Listado de películas'.'</h1>';
//echo '<br/>'.'<hr/>';
echo '<ul>';
    for($i = 0; $i < count($peliculas); $i++)
    {
        echo '<li>'.$peliculas[$i].'</li>';
    }
echo '</ul>';

//foreach
echo '<br/>'.'<hr/>';
echo '<h1>'.'Lista de cantantes'.'</h1>';
echo '<ul>';
    foreach ($cantantes as $cantante)
    {
        echo '<li>'.$cantante.'</li>';
    }
echo '</ul>';
echo '<br/>'.'<hr/>';
// Array asociativo 
echo '<h1>'.'Array Asociativos'.'</h1>';
$personas = array('nombre ' => 'Andrea', 'apellidos' => 'Aguilar',
    'web' => 'www.google.com');

var_dump($personas);
echo '<br/>'.'<hr/>';
// Array multidimensional
$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com'
    )
);

var_dump($contactos);
echo $contactos[1]['nombre']; // Para acceder a la información de los arrays

foreach ($contactos as $key => $contacto)
{
    var_dump($contacto['nombre']);
}
?>

