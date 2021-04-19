<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Add Category</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1"> Title </label>
                <input type="text" name="title" class="form-control" id="exampleInputText1"  placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputImageName1">Image Name</label>
                <input type="text"  name="imageName" class="form-control" id="exampleInputImageName1"  placeholder="Enter Image Name">
            </div>
            <div class="form-group">
                <label for="exampleInputActive1">Active</label>
                <input type="text" name="active" class="form-control" id="exampleInputActive1" placeholder="Active: True or False">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>
<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $imageName=$_POST['imageName'];
        $active=$_POST['active'];

        $sql_order_query="INSERT INTO category (title,image_name,active) VALUES ('$title','$imageName','$active')"; 
        $result=mysqli_query($conn,$sql_order_query);

        if($result){
          $_SESSION['category_added']="Category has been added!!!";
          echo "<script type='text/javascript'>  window.location='./adminCategories.php'; </script>";
        }else{
          $_SESSION['category_added']="Category ahs not been added!! please try again..";
        }
        // mysqli_close($conn);
    }
?>