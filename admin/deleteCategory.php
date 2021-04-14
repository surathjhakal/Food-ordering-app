<?php include('../config/constants.php') ?>
<?php
  $id=$_GET['id'];
  $sql="DELETE FROM category WHERE id=$id";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if($result){
    $_SESSION['category_deleted']="Category has been deleted!!!";
    echo "<script type='text/javascript'>  window.location='./adminCategories.php'; </script>";
  }else{
    $_SESSION['category_deleted']="Category has not been deleted!! please try again..";
    echo "<script type='text/javascript'>  window.location='./adminCategories.php'; </script>";
  }
?>