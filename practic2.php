<?php

include_once "course\ICourse.php";
include_once "course\BankGovUaCourse.php";

$className = 'BankGovUaCourse';

$course = new $className();

$tmpMss = [
    "usd",
    "eur",
    "rub",
    "lev",
];

//$usd = 29.08;
//$eur = 76.08;
//$rub = 3.08;
//$lev = 987.08;

function usd(){
    return 23;
}
function eur(){
    return 47;
}
function rub(){
    return 12;
}
function lev(){
    return 45;
}




foreach ($tmpMss as $prop){
    //echo $$prop . ", "; // переменная-переменной
    echo $prop() . ", "; // вызов функции с использованием название метода в переменной
}

echo $course->getUSD();