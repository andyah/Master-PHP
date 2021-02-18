<?php

/* 
 * Imprimir por pantalla todas las tablas de multiplicar (1-10)
 * en una tabla HTML
 */

echo '<table border = "1">'.'<tr>'; //inicio de la tabla

echo '<tr>'; // fila 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++)
    {
        echo '<th>'.' Tabla del '.$cabecera.'</th>';
    }
echo '</tr>'; // cierre de fila 1 de celdas

echo '<tr>'; // Inicio fila 2
    for($i = 1; $i <= 10; $i++)
    {
        echo '<td>';
        for($x = 1; $x <= 10; $x++)
        {
            echo $i.'x'.$x.'='.($i*$x).'<br/>';
        }
        echo '</td>';
    }
echo '</tr>'; // cierre fila 2
echo '</table>'; // fin de tabla
?>

