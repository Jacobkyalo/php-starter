<?php

setcookie('name','Jacob',time()+86400*30);
setcookie('name','',time()-86400);

if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}
?>