<?php
//para saber si la url es https o http
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https';
}
else
{
echo 'http'."\n";
}


