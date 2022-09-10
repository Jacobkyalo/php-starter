<?php

session_start();


if(isset($_POST['submit'])){
  $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if($username=='Jacob'&&$password=='1234'){
    $_SESSION['username']=$username;
    header('Location: /phpfiles/extras/dashboard.php');
  }else{
    echo 'Invalid login';
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
  <label for="username">Username:</label>
  <input type="text" name="username">
</div>
<div>
  <label for="password">Password:</label>
  <input type="text" name="password">
</div>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>