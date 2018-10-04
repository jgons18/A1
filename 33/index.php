<?php
//funció per trobar el primer caràcter que NO es repeteixi
 function trobar_no_repeticio($word) {
  $chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
      //substr_count-compte el número d aparicions del substring
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

echo trobar_no_repeticio("HOLAA")."<br>";
echo trobar_no_repeticio("ggorra")."<br>";
?>

