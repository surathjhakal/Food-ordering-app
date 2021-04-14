<?php include('../config/constants.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $sql="SELECT * FROM adminTable";
    $result = mysqli_query($conn, $sql);
?>
<div class="adminManage">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2>Manage Admin</h2>
        <hr>
        <?php
            if(isset($_SESSION['admin_added'])){
                $message=$_SESSION['admin_added'];
                echo "<h5 style='color:green'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['admin_added']);
            }
        ?>
        <?php
            if(isset($_SESSION['admin_deleted'])){
                $message=$_SESSION['admin_deleted'];
                echo "<h5 style='color:red'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['admin_deleted']);
            }
        ?>
        <?php
            if(isset($_SESSION['admin_updated'])){
                $message=$_SESSION['admin_updated'];
                echo "<h5 style='color:darkorange'>($message)</h5>";
                echo "<hr>";
                unset($_SESSION['admin_updated']);
            }
        ?>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
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
                    <td><?php echo $row['full_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a href="./updateAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a>
                    <a href="./deleteAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
                $sr+=1;
            }
            ?>
        </tbody>
        </table>
        <a href="./addAdmin.php"><button class="addAdminButton">Add Admin</button></a>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>