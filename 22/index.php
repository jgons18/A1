<?php
//crea fitxer temporal en el temp

//tempnam - crea un fitxer amb un nom únic
//sys_get_temp_dir - retorna la ruta del directori per arxius temporales
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";
