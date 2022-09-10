<?php
$fruits =['mangoes','apples','organges'];
//get length
// echo count($fruits)
//search for an item

// var_dump(in_array('mangoes',$fruits));
$fruits[]='berries';
array_push($fruits,'blueberries','strawberries');
array_unshift($fruits,'pears');

// remove from an array
array_pop(($fruits));
array_shift($fruits);
// unset($fruits[3]);

//chunk arrays
// $chunked_array =array_chunk($fruits,3);

// print_r($chunked_array);
// print_r($fruits)

$arr1 =[1,2,3];
$arr2 =[4,5,6];

$arr3 = array_merge($arr1,$arr2);
// spread operator
$arr4 =[...$arr1,...$arr3];
// print_r($arr4)

// range 
$numbers = range(1,20);
// print_r($numbers)
// array_map 

$newNumbers = array_map(function($number){
  return "Number ${number}";
},$numbers);

// print_r($newNumbers);

// array_filter

$lessThanTen = array_filter($numbers,function($number){
  return $number<=10;
});

// print_r($lessThanTen)
// array_reduce

$sum = array_reduce($numbers,fn($curr,$number)=> $curr+$number);

echo $sum;
?>