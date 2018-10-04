<?php
//retorna un array amb els nom de funcions de mòdul json i xml
print_r(get_extension_funcs("JSON"));
echo "<br>";
print_r(get_extension_funcs("XML"))."<br>";

