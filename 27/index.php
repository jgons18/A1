<?php
//FUNCIÓ PER TRANSFORMAR PARAULES EN NÚMEROS,EX: ZERO --> 0
function word_digit($word) {
    //explode-divideix un string en varios strings,en aquest cas delimitant amb ';'
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        //trim-elimina espais en blanc de inici i fi de cadena
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'u':
                $result .= '1';
                break;
            case 'dos':
                $result .= '2';
                break;
            case 'tres':
                $result .= '3';
                break;
            case 'cuatre':
                $result .= '4';
                break;
            case 'cinc':
                $result .= '5';
                break;
            case 'sis':
                $result .= '6';
                break;
            case 'set':
                $result .= '7';
                break;
            case 'vuit':
                $result .= '8';
                break;
            case 'nou':
                $result .= '9';
                break;    
        }
    }
    return $result;
}

echo word_digit("nou;cinc;dos;cuatre")."<br>";
echo word_digit("set;vuit;vuit")."<br>";


