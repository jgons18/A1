<?php
//seccionar / obtener datos de la url
$link = 'http://toni.cesnuria.com/php/php-basic-exercises.php';
$link = parse_url($link);
//php_eol y \n en teoria hacen lo mismo,son saltos de linea
echo 'Scheme : '.$link['scheme'].PHP_EOL;
echo 'Host : '.$link['host']."\n";
echo 'Path : '.$link['path']."\n";



