<?php
$string = 'Hello World';

echo strpos($string,'o');
echo strrpos($string,'o');
echo strrev($string);
echo strtoupper($string);
echo ucwords($string);
$new = str_replace('World','Everyone',$string);

var_dump( str_starts_with($string,'Hel'));
var_dump(str_ends_with($new,'d'));

echo substr($string,0,5);
echo substr($new,5);


$string2='<script>alert(10)</script>';
echo htmlspecialchars($string2);

printf('%s loves to %s','Jack','code');
printf('1+1=%f',1+1)

?>