
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>Please input your name:<br></h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type='text' name='nombreuser' >
            <input type='submit' value='Submit'>
        </form>
        
    </body>
</html>

<?php
/*
$username = 'jgons';

$body ="<html><head><title></title></head>";
$body .="<body><h2>Please input your name:<br>";
$body .= '<form action="<?= $_SERVER[\'PHP_SELF\'];?>" method="POST">';
$body .="<input name='nombreuser' type='text'>";
$body .= "<input name ='submit' type='button' value='Submit></form></body></html>";

echo $body;*/

//declaración de si ha introducido valor y si no está vacio
if(isset($_POST['nombreuser']) && !empty($_POST['nombreuser'])){
    //si tiene ha escrito algo le dirá hola con lo que haya escrito
    $username = $_POST['nombreuser'];
    /*echo 'Hola ' .$username;*/
    if($username == 'jgons'){
        echo 'hello';
    }else{
        echo 'incorrecto';
    }

}else{
    echo 'Introduce nombre';
}



