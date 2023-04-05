<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    unset($_SESSION['notify']);
    $customer_id=$_SESSION['user_id'];
    $sql = "SELECT * FROM order_detail WHERE customer_id='$customer_id' ORDER BY order_time desc";
    $result = mysqli_query($conn, $sql);
?>
<?php include('../reusePages/base.php') ?>
    <div class="foods">
    <?php include('./navbar.php') ?>
      <div class="foods_menu_top notification_box">
        <h2 class="food_menu_title">Notification Section</h2>
        <hr>
        <div class="alert alert-warning alert-dismissible fade show"  class="notification" role="alert">
            We follow all the hygene rules while making your food
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php 
            while($row=mysqli_fetch_assoc($result)){
                $food_id=$row['food_id'];
                $sql1 = "SELECT * FROM food WHERE id=$food_id";
                $result1=mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_assoc($result1);
        ?>
        <div class="alert alert-success alert-dismissible fade show" class="notification"  role="alert">
            Your <strong><?php echo $row1['title']?></strong> order has been confirmed & you will get your order in 10 mins or You can <strong>cancel</strong> the food within 10 min..
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php }?>
      </div>
    </div>
    <?php
        if(mysqli_num_rows($result)>10){
            include('../reusePages/footer.php');
        }else{
            include('../reusePages/footerRare.php'); 
        }
    ?>

