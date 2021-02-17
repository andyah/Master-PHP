<!DOCTYPE HTML>
<html lang = "es">
    <head>
        <meta charset="UTF-8"/>
        <title> Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP</h1>
        
        <?= "Bienvenido al curso mas grande de PHP"?>  <!-- Imprimir en pantalla "echo"--> 
         
        <?php
        // Titular de la sección
            echo "<h3>Listado de videojuegos:</h3>"; // Imprimiendo con echo código de html
            /* Esta es una lista de los
             * videojuegos
             * moderno
             */
            echo "<ul>"
                    ."<li>GTA</li>"
                    ."<li>Fifa</li>"
                    ."<li>Mario Bross</li>"
                ."</ul>"; // comillas dobles y punto para contatenar 
            // Parráfo explicativo
            echo '<p>Esta es toda'.'-'.'lista de juegos'.'</p>';
        ?>
    </body>
</html>

