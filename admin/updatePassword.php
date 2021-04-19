<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM adminTable WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Change Password</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1">Current Password </label>
                <input type="password" name="currentPassword" class="form-control" id="exampleInputText1"  placeholder="Enter Your Current Password">
            </div>
            <div class="form-group">
                <label for="exampleInputText2">New Password</label>
                <input type="password" name="newPassword" class="form-control" id="exampleInputText2"  placeholder="Enter Your New Password">
            </div>
            <div class="form-group">
                <label for="exampleInputText3">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control" id="exampleInputText3"  placeholder="Enter New Password Again">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        $currentPassword=$_POST['currentPassword'];
        $newPassword=$_POST['newPassword'];
        $confirmPassword=$_POST['confirmPassword'];

        if(password_verify($currentPassword,$row['password'])){
            if($newPassword!=$confirmPassword){
                $_SESSION['admin_WrongConfirmPassword']="Your new password & confirm password didn't match";         
            }else{
                $password=password_hash($newPassword,PASSWORD_DEFAULT);
                $sql_order_query="UPDATE adminTable SET password='$password' WHERE id=$id"; 
                $result=mysqli_query($conn,$sql_order_query);

                if($result){
                    $_SESSION['password_updated']="Your Password has been updated!!!";
                    echo "<script type='text/javascript'>  window.location='./adminManage.php'; </script>";
                }else{
                    $_SESSION['password_updated']="Your Password not been updated!! please try again..";
                }
            }
        }
    }
?>