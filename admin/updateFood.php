<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM food WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row2=mysqli_fetch_assoc($result);
    $c=$row2['category_id'];
    $sql4="SELECT title FROM category WHERE id=$c";
    $result4 = mysqli_query($conn, $sql4);
    $row4=mysqli_fetch_assoc($result4);
?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Update Food</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1"> Title </label>
                <input type="text"  name="title"  value="<?php echo $row2["title"];?>" class="form-control" id="exampleInputText1"  placeholder="Enter Your Food Name">
            </div>
            <div class="form-group">
                <label for="exampleInputprice1">Price</label>
                <input type="text" name="price" value="<?php echo $row2['price']?>" class="form-control" id="exampleInputprice1"  placeholder="Enter Price: 200.00">
            </div>
            <div class="form-group">
                <label for="exampleInputImageName1">Image Name</label>
                <input type="text" name="imageName" value="<?php echo $row2['image_name']?>" class="form-control" id="exampleInputImageName1"  placeholder="Enter Image Name">
            </div>
            <div class="form-group">
                <label for="exampleInputcategory1">Category Name</label>
                <input type="text" name="category" value="<?php echo $row4['title']?>" class="form-control" id="exampleInputcategory1"  placeholder="Enter the category name">
            </div>
            <div class="form-group">
                <label for="exampleInputfeatured1">Featured</label>
                <input type="text" name="featured" value="<?php echo $row2['featured']?>" class="form-control" id="exampleInputfeatured1"  placeholder="Enter True or False">
            </div>
            <div class="form-group">
                <label for="exampleInputActive1">Active</label>
                <input type="text" name="active" value="<?php echo $row2['active']?>" class="form-control" id="exampleInputActive1" placeholder="Active: True or False">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        echo $title=$_POST['title'];
        echo $imageName=$_POST['imageName'];
        echo $price=$_POST['price'];

        echo $category=$_POST['category'];
        $sql1="SELECT id FROM category WHERE title='$category'";
        $result1=mysqli_query($conn,$sql1);
        $row3=mysqli_fetch_assoc($result1);
        echo $categoryId=$row3['id'];

        echo $featured=$_POST['featured'];
        echo $active=$_POST['active'];

        $sql_order_query1="UPDATE food SET title='$title',price='$price',image_name='$imageName',category_id='$categoryId',featured='$featured',active='$active' WHERE id=$id"; 
        $result2=mysqli_query($conn,$sql_order_query1);

        if($result2){
          $_SESSION['food_updated']="Food has been updated!!!";
          echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
        }else{
          $_SESSION['food_updated']="Food has not been updated!! please try again..";
          echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
        }
    }
?>