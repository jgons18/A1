<?php

$username = 'jgons';

$body ="<html><head><title></title></head>";
$body .="<body><h2>Please input your name:<br><input name='nombreuser' type='text'>";
$body .= " <input name ='submit' type='button' value='Submit Name'></body></html>";


/*if(isset($_POST['nombreuser']) && $_POST['nombreuser'] == $username ){

    echo 'Hello';
}*/

echo $body;

