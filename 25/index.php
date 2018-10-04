<?php


$a=10;
$b=20;

echo "Valor de a: $a</br>";
echo "Valor de b: $b</br>";

//guardo el valor de a en temp(que es 10)
$temp=$a;
//subtitueixo el valor de b ,que es 20 en la variable a
$a=$b;
//es queda amb el valor de temp,que anteriorment hem indicat que es 10
$b=$temp;

echo "Valor de a: $a</br>";
echo "Valor de b: $b</br>";
