<?php

$x=20;
function registerUser(){
  global $x;
  echo $x;
  $y=30;
  //echo 'User registered';

}


//registerUser();

// with arguments
function add($name){
  echo "${name} resigtered";
}

// add('Jack');

// arrow functions
$minus = fn($num1,$num2)=>$num1 - $num2;

// echo $minus(2323,42);


// anonymous functions
$displayUser =function($name){
  return $name;
};

echo $displayUser('Jane');

?>