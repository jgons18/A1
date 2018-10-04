<?php
//código de la página en este caso de youtube
$texto = file('http://www.youtube.com/');
foreach ($texto as $numerolinea => $linea)
 {
 	echo "Line No.-{$numerolinea }: " . htmlspecialchars($linea) . "\n";
 }

