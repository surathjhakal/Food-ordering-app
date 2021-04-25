<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<div class="addAdmin">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2 style="text-align:center;">Add Food</h2>
        <hr>
        <form class="addAdminForm" method="POST" action="">
            <div class="form-group">
                <label for="exampleInputText1"> Title </label>
                <input type="text"  name="title" class="form-control" id="exampleInputText1"  placeholder="Enter Your Food Name">
            </div>
            <div class="form-group">
                <label for="exampleInputImageName1">Image Name</label>
                <input type="text" name="imageName" class="form-control" id="exampleInputImageName1"  placeholder="Enter Image Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter description about food.." id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputprice1">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputprice1"  placeholder="Enter Price: 200.00">
            </div>
            <div class="form-group">
                <label for="exampleInputcategory1">Category Name</label>
                <input type="text" name="category" class="form-control" id="exampleInputcategory1"  placeholder="Enter the category name">
            </div>
            <div class="form-group">
                <label for="exampleInputfeatured1">Featured</label>
                <input type="text" name="featured" class="form-control" id="exampleInputfeatured1"  placeholder="Enter True or False">
            </div>
            <div class="form-group">
                <label for="exampleInputActive1">Active</label>
                <input type="text" name="active" class="form-control" id="exampleInputActive1" placeholder="Active: True or False">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
<?php include('../reusePages/footerRare.php') ?>
<?php
    if(isset($_POST['submit'])){
        echo $title=$_POST['title'];
        echo $imageName=$_POST['imageName'];
        echo $description=$_POST['description'];
        echo $price=$_POST['price'];

        echo $category=$_POST['category'];
        $sql1="SELECT id FROM category WHERE title='$category'";
        $result1=mysqli_query($conn,$sql1);
        echo $row=mysqli_fetch_assoc($result1);
        echo $categoryId=$row['id'];

        echo $featured=$_POST['featured'];
        echo $active=$_POST['active'];

        $sql_order_query="INSERT INTO food (title,description,price,image_name,category_id,featured,active) VALUES ('$title','$description','$price','$imageName','$categoryId','$featured','$active')"; 
        $result=mysqli_query($conn,$sql_order_query);

        if($result){
          $_SESSION['food_added']="Food has been added!!!";
          echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
        }else{
          $_SESSION['food_added']="Food ahs not been added!! please try again..";
          echo "<script type='text/javascript'>  window.location='./adminFoods.php'; </script>";
        }
        // mysqli_close($conn);
    }
?>