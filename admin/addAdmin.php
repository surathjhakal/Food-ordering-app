<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Add Admin</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1">Full name </label>
                <input type="text" name="fullName" class="form-control" id="exampleInputText1"  placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footerRare.php') ?>
<?php
    if(isset($_POST['submit'])){
        $fullName=$_POST['fullName'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql_order_query="INSERT INTO adminTable (full_name,email,password) VALUES ('$fullName','$email','$password')"; 
        $result=mysqli_query($conn,$sql_order_query);

        if($result){
          $_SESSION['admin_added']="Admin has been added!!!";
          echo "<script type='text/javascript'>  window.location='./adminManage.php'; </script>";
        }else{
          $_SESSION['admin_added']="Admin ahs not been added!! please try again..";
        }
        // mysqli_close($conn);
    }
?>