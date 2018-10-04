<?php
//muestra la url entera del fichero,en este caso estamos en el localhost
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $full_url."\n";
