<?php include('../config/constants.php') ?>
<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM category WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Update Category</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1"> Title </label>
                <input type="text" value="<?php echo $row['title']?>" name="title" class="form-control" id="exampleInputText1"  placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleInputImageName1">Image Name</label>
                <input type="text" value="<?php echo $row['image_name']?>" name="imageName" class="form-control" id="exampleInputImageName1"  placeholder="Enter Image Name">
            </div>
            <div class="form-group">
                <label for="exampleInputActive1">Active</label>
                <input type="text" name="active" value="<?php echo $row['active']?>" class="form-control" id="exampleInputActive1" placeholder="Active: True or False">
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

        $sql_order_query="UPDATE category SET title='$title',image_name='$imageName',active='$active' WHERE id=$id"; 
        $result=mysqli_query($conn,$sql_order_query);

        if($result){
          $_SESSION['category_updated']="Category has been updated!!!";
          echo "<script type='text/javascript'>  window.location='./adminCategories.php'; </script>";
        }else{
          $_SESSION['category_updated']="Category ahs not been updated!! please try again..";
        }
    }
?>