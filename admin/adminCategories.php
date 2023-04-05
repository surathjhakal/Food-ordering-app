<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $sql="SELECT * FROM category";
    $result = mysqli_query($conn, $sql);
?>
<div class="adminManage">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2>Manage Category</h2>
        <hr>
        <?php
            if(isset($_SESSION['category_added'])){
                $message=$_SESSION['category_added'];
                echo "<h5 style='color:green'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['category_added']);
            }
        ?>
        <?php
            if(isset($_SESSION['category_deleted'])){
                $message=$_SESSION['category_deleted'];
                echo "<h5 style='color:red'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['category_deleted']);
            }
        ?>
        <?php
            if(isset($_SESSION['category_updated'])){
                $message=$_SESSION['category_updated'];
                echo "<h5 style='color:darkorange'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['category_updated']);
            }
        ?>
        <table class="table table-responsive">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Title</th>
            <th scope="col">Image name</th>
            <th scope="col">Active</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sr=1;
                while($row=mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <th scope="row"><?php echo $sr; ?></th>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['image_name']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                    <td><a href="./updateCategory.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                    <a href="./deleteCategory.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
                $sr+=1;
            }
            ?>
        </tbody>
        </table>
        <a href="./addCategory.php"><button class="addAdminButton">Add Category</button></a>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>