<?php
$numbers =[12,34,5,4,43,];
$hobbies = array('singing','playing','touring');

// print_r($numbers);
// echo $hobbies[1];

//var_dump($hobbies)

// associative arrays 
$nums =[
  1=>2,
  2=>39,
  8=>44
];

// echo $nums[8];

$post =[
  'title'=>'Post One',
  'body'=>'This is post one of the blog',
  'rating'=>4.5
];

// echo $post['body'];

// multi-dimensional arrays

$posts =[
  [ 'title'=>'Post One',
  'body'=>'This is post one of the blog',
  'rating'=>4.5],
  [ 'title'=>'Post Two',
  'body'=>'This is post two of the blog',
  'rating'=>4.5],
  [ 'title'=>'Post Three',
  'body'=>'This is post three of the blog',
  'rating'=>4.5]
];

// echo $posts[1]['body'];

// var_dump(json_encode($posts))
?>