<?php include('../config/constants.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $sql="SELECT * FROM order_detail";
    $result = mysqli_query($conn, $sql);
?>
<div class="adminManage">
    <?php include('./navbar.php') ?>
    <div class="adminManageContent">
        <h2>Manage Orders</h2>
        <hr>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">Sr</th>
            <th scope="col">Name</th>
            <th scope="col">Food Ordered</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Email Id</th>
            <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sr=1;
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['food_id'];
                    $sql1="SELECT title FROM food WHERE id=$id";
                    $result1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_assoc($result1)
            ?>
                <tr>
                    <th scope="row"><?php echo $sr; ?></th>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row1['title']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['customer_contact']; ?></td>
                    <td><?php echo $row['customer_email']; ?></td>
                    <td><?php echo $row['customer_address']; ?></td>
                </tr>
            <?php
                $sr+=1;
            }
            ?>
        </tbody>
        </table>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>