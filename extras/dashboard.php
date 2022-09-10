<?php

session_start();


if($_SESSION['username']){
  echo "<h1>"."Welcome" .$_SESSION['username']."</h1>";
  echo '<a href="logout.php">Logout</a>';
}else{
  echo "<h1>Welcome Guest</h1>";
}
?>

<a href="/phpfiles/13_sessions.php">Home</a>