<?php
// Constantes -> no varia el dato
// Contenedor de información que no puede varia

define('nombre', 'Andrea Aguilar');
define('web', 'www.google.com');

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.web.'</h2>';

// Constantes predefinidas
echo PHP_VERSION;
echo PHP_OS;
echo PHP_EXTENSION_DIR;
echo __LINE__;
echo __FILE__;
echo __FUNCTION__;


?>
