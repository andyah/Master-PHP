<?php

/* 
 * Crear un array con el contenido de la tabla:
 * videojuegos de 
 * accion -> GTA, COD, PUGB, aventura -> ASSASINS, CRASH, Prince Of Persia
 *  y deportes -> FIFA 19, PES 19, MOTO GP 19
 * Representar tabla en HTML
 * Cada columna en fichero separado
 */

$tabla = array(
    'ACCION' => array('GTA 5', 'CALL OF DUTY', 'PUGB'),
    'AVENTURA' => array('ASSASINS CREED', 'CRASH BANDICOOT', 'PRINCE OF PRESIA'),
    'DEPORTES' => array('FIFA 19', 'PES 19', 'MOTO GP 19')
);

$categorias = array_keys($tabla);

echo '<h1>'.'Tabla de Videojuegos'.'</h1>';
?>

<table border = "1">
    <?php require_once 'ejercicio5/encabezado.php';?>
    <?php require_once 'ejercicio5/primerfila.php';?>
    <?php require_once 'ejercicio5/segundafila.php';?>
    <?php require_once 'ejercicio5/tercerfila.php';?>
</table>
