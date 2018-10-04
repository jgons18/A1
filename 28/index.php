<?php
//ELIMINA ELS DUPLICATS
function borrar_duplicat($list) {
    //array_unique-elimina els valors duplicats en un array
    //array_values-retorna valor del array
  $nums_unique = array_values(array_unique($list));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(borrar_duplicat($nums));
