<?php
    if(!isset($_SESSION['admin'])){
        echo "<script type='text/javascript'>  window.location='./adminLogin.php'; </script>";
    }
?>