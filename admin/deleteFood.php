<?php include('../config/constants.php') ?>
<?php
  $id=$_GET['id'];
  $sql="DELETE FROM food WHERE id=$id";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if($result){
    $_SESSION['food_deleted']="Food has been deleted!!!";
    echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
  }else{
    $_SESSION['food_deleted']="Food has not been deleted!! please try again..";
    echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
  }
?>