<?php
$name ='Jacob';//string
$age =20;//integer
$is_employed =false;//bool
$balance =33.33;//float

echo $name;
echo $age;
var_dump($is_employed);
echo $balance;


//strings and variables
// echo $name ."is" .$age. "years old.";
echo "${name} is ${age} years old";

// arithemtic
$add = 5+5;
echo $add;
$add2= "5"+"5";//gives 10
var_dump($add2);
echo 10%3 ;//1
echo 33/3;//11

// constants
define('HOST','localhost');
define('DB_NAME','test_db');

echo HOST;
echo DB_NAME;

?>