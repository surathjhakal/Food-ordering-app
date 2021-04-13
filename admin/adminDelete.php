<?php include('../config/constants.php') ?>
<?php
    $id=$_GET['id'];
    $sql="DELETE FROM adminTable WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
      $_SESSION['admin_deleted']="Admin has been deleted!!!";
      echo "<script type='text/javascript'>  window.location='adminManage.php'; </script>";
    }else{
      $_SESSION['admin_deleted']="Admin has not been deleted!! please try again..";
      echo "<script type='text/javascript'>  window.location='adminManage.php'; </script>";
    }
?>