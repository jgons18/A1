<?php

//retorna informació sobre el SO en que se està exe. el php
echo php_uname()."\n";
//SO pel que es va contruir php
echo PHP_OS."\n";
//strtoupper - converteix string en majúscules
//substr - retorna part d una cadena 
//si la cadena convertida en majus. del SO des de la posició 0 llegint només
//3 lletres es 'WIN', retorna eestas utilitzant windows
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'Estàs utilitzant Windows!';
} else {
echo 'No estás utilitzant Windows!'."\n";
}