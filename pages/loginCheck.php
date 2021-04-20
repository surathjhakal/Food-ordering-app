<?php
    if(!isset($_SESSION['user'])){
        echo "<script type='text/javascript'>  window.location='./userLogin.php'; </script>";
    }
?>