<?php include('../config/constants.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $sql="SELECT * FROM food";
    $result = mysqli_query($conn, $sql);
?>
<div class="adminManage">
    <?php include('./navbar/mainNavbar.php') ?>
    <div class="adminManageContent">
        <h2>Manage Food</h2>
        <hr>
        <?php
            if(isset($_SESSION['food_added'])){
                $message=$_SESSION['food_added'];
                echo "<h5 style='color:green'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['food_added']);
            }
        ?>
        <?php
            if(isset($_SESSION['food_deleted'])){
                $message=$_SESSION['food_deleted'];
                echo "<h5 style='color:red'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['food_deleted']);
            }
        ?>
        <?php
            if(isset($_SESSION['food_updated'])){
                $message=$_SESSION['food_updated'];
                echo "<h5 style='color:darkorange'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['food_updated']);
            }
        ?>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Title</th>
            <th scope="col">Image name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Featured</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sr=1;
                while($row=mysqli_fetch_assoc($result)){
                    $category_id=$row['category_id'];
                    $sql1="SELECT title FROM category WHERE id=$category_id";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1=mysqli_fetch_assoc($result1);

            ?>
                <tr>
                    <th scope="row"><?php echo $sr; ?></th>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['image_name']; ?></td>
                    <td><?php echo $row1['title'] ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['featured']; ?></td>
                    <td><a href="./adminFoodUpdate.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                    <a href="./adminFoodDelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
                $sr+=1;
            }
            ?>
        </tbody>
        </table>
        <a href="./addFood.php"><button class="addAdminButton">Add Food</button></a>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>