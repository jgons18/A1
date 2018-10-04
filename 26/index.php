<?php
//FUNCIÓ PER SABER SI UN NÚMERO ES ARMSTRONG
//ES A DIR,QUE UN NÚMERO ES IGUAL A LA SUMA DE LES NÈSIMES POTENCIES DELS SEUS DÍGITS
function armstrong_number($num) {
  //strlen obté el tamany/longitud d un string
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  //el bucle no parará fins que acabi de recorre la cadena
  for ($i = 0; $i < $sl; $i++) {
    //pow-expressió exponencial-->primer s indica la base i després el exponent
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Es 153 un número Armstrong ? ".armstrong_number(153);
echo "<br>Es 21  un número Armstrong? ".armstrong_number(21);
echo "<br>Es 4587 un número Armstrong? ".armstrong_number(4587);"<br>";



