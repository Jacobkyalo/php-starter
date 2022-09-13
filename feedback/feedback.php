<?php include 'inc/header.php';?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn,$sql);
$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>


<?php if(empty($feedback)):?>
<p  style="text-align: center;">No feebacks found!</p>
<?php endif;?>

<div class="card-wrapper">
<?php foreach($feedback as $item):?>
  <div class="card">
    <p><?php echo $item['body'];?></p>
    <p>By <?php echo $item['name']?></p>
  </div>
<?php endforeach;?>
</div>



<?php include 'inc/footer.php';?>