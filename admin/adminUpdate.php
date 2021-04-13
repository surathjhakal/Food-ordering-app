<?php include('../config/constants.php') ?>
<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM adminTable WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar/mainNavbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Update Admin</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1">Full name </label>
                <input type="text" name="fullName" value="<?php echo $row['full_name']?>" class="form-control" id="exampleInputText1"  placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        $fullName=$_POST['fullName'];
        $email=$_POST['email'];

        $sql_order_query="UPDATE adminTable SET full_name='$fullName',email='$email' WHERE id=$id"; 
        $result=mysqli_query($conn,$sql_order_query);

        if($result){
          $_SESSION['admin_updated']="Admin has been updated!!!";
          echo "<script type='text/javascript'>  window.location='./adminManage.php'; </script>";
        }else{
          $_SESSION['admin_updated']="Admin ahs not been updated!! please try again..";
        }
        // mysqli_close($conn);
    }
?>