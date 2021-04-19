<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    session_destroy();

    echo "<script type='text/javascript'>  window.location='./adminLogin.php'; </script>";
?>