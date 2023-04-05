<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $sql="SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
?>
<div class="adminManage">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2>Website Users</h2>
        <hr>
        <table class="table table-responsive">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Gender</th>
            <th scope="col">Location</th>
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
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                </tr>
            <?php
                $sr+=1;
            }
            ?>
        </tbody>
        </table>
    </div>
</div>
<?php
    if(mysqli_num_rows($result)>10){
        include('../reusePages/footer.php');
    }else{
        include('../reusePages/footerRare.php'); 
    }
?>