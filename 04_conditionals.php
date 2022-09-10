<?php
//  conditionals
// if...else
$age =10 ;
if ($age>=18) {
  echo 'You can vote';
}else{
  echo 'You cannot vote';
}

$datetime  = date('F j o' );
//echo $datetime;

$posts = ['First Post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

//echo !empty($posts) ? $posts[0]:'No posts';

// echo $posts[0] ??null;

// switch
$eyecolor ='blue';
switch ($eyecolor) {
  case 'blue':
   echo 'Your eyes are blue';
    break;
  case 'white':
      echo 'Your eyes are white';
       break;
  case 'red':
        echo 'Your eyes are red';
         break;
  default:
    echo 'Your eyecolor is none of the above';
    break;
}

?>