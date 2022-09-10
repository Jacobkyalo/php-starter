<?php
//loops
// for loop
// for($x=1;$x<=10;$x++){
//   echo $x.'<br/>';
// }

// // while loop
// $y = 1;
// while ($y<= 10) {
//  echo $y.'<br/>';
// $y++;
// }

// do...while
//executes at least once
// $a = 1;
// do {
//   echo $a;
//   $a++;

// } while ($a <= 10);]

// loops and arrays

$posts = ['Post one','Post two','Post three'];
// for ($i=0; $i <count($posts) ; $i++) { 
//   # code...
//   echo $posts[$i];
// }

//foreach
// foreach($posts as $post){
//   echo $post . '<br/>';
// }

// foreach($posts as $index =>$post){
// echo $index+1 .$post;
// }

// associative arrays
$person=[
'first_name'=>'Jacob',
'last_name'=>'kyalo',
'age'=>20
];

foreach($person as $key => $person1){
  echo "${key} - ${person1}<br>";
}
?> 