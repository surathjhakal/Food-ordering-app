<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
  $id=$_GET['id'];
  $sql="UPDATE order_detail SET status='Cancelled' WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
    $_SESSION['order_cancelled']="Your Order has been Cancelled Successfully,you will get your refund within 5 min";
    echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
  }else{
    $_SESSION['order_cancelled']="Your Order has not been Cancelled";
    echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
  }
?>