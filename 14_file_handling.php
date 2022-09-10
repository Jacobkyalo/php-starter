<?php

$file = 'extras/users.txt';

if (file_exists($file)){
  // print_r(readfile($file));
  $handle = fopen($file,'r');
  $contents = fread($handle,filesize($file));
  fclose($handle);
  echo $contents;
}else{
  $handle =fopen($file, 'w');
  $contents = 'Jacob'.PHP_EOL.'Collins'.PHP_EOL.'Patrick';
  fwrite($handle,$contents); 
  fclose($handle);
}
?>