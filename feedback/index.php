<?php include 'inc/header.php';?>

<?php
$name =$email =$body ='';
$error = '';

if(isset($_POST['submit'])){
  if(empty($_POST['name']) || empty($_POST['email'])||empty($_POST['body'])){
    $error ='All fileds are required!';
  }else{
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    $body = filter_input(INPUT_POST,'body',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if(empty($error)){
    $sql = "INSERT INTO feedback (name,email,body) VALUES ('$name','$email','$body')";
    if(mysqli_query($conn,$sql)){
      header('Location: feedback.php');
    }
  }

}

?>
     <p style="color: red;"><?php echo $error ?? null;?></p>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
   <div>
   <label for="name">Name:</label>
    <p>
      <input type="text" name="name">
    </p>
   </div>
   <div>
   <label for="email">Email:</label>
    <p>
      <input type="email" name="email">
    </p>
   </div> 
   <div>
   <label for="body">Feedback:</label>
    <p>
     <textarea name="body" cols="30" rows="5"></textarea>
    </p>
   </div>
   <div>
    <input type="submit" name="submit" value="Submit">
   </div>
    </form>
<?php include 'inc/footer.php';?>