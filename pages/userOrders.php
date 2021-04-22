<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
  $email=$_SESSION['user'];
  $sql = "SELECT * FROM order_detail WHERE customer_email='$email' ORDER BY order_time desc";
  $result = mysqli_query($conn, $sql);
  $count=0;
  unset($_SESSION['order_notify'])
?>
<?php include('../reusePages/base.php') ?>
    <div class="foods">
    <?php include('./navbar.php') ?>
      <div class="foods_menu_top">
        <div class="food_menu">
          <h2 class="food_menu_title">Your Orders</h2>
          <?php 
          $counter=0;
          while($counter<((int)mysqli_num_rows($result)/2))
          {
        ?>
          <div class="food_item_line">
          <?php
            $innerCount=0;
            while(true) {
              if($innerCount==2 or $count>=mysqli_num_rows($result)){
                break;
              }
              $row1 = mysqli_fetch_assoc($result);
              $food_id=$row1['food_id'];
              $sql1 = "SELECT * FROM food WHERE id=$food_id";
              $result1=mysqli_query($conn,$sql1);
              $row = mysqli_fetch_assoc($result1);
              $count+=1;
          ?>
            <div class="food_item">
              <div class="food_item_image">
                <img
                  src="../images/<?php echo $row["image_name"]; ?>"
                  class="food_menu_image"
                  alt="food_image"
                />
              </div>
              <div class="food_item_info">
                <h4><?php echo $row["title"]; ?></h4>
                <p class="food_price">Total: ₹<?php echo $row1["total"]; ?></p>
                <p class="food_price">Qnty: <?php echo $row1["quantity"]; ?></p>
                <p class="food_detail">
                  Order Date & Time: <?php echo $row1["order_time"]; ?>
                </p>
                <p class="food_star">Status: <?php echo $row1["status"]; ?></p>
                <a href="./order.php?id=<?php echo $row['id'] ?>" class="food_menu_orderNow">Again Order</a>
              </div>
            </div>
            <?php
            $innerCount+=1;
            }
          ?>
          </div>
          <br />
          <?php
        $counter+=1;
          }
        ?>
        </div>
      </div>
    </div>
    <?php
        if(mysqli_num_rows($result)>4){
            include('../reusePages/footer.php');
        }else{
            include('../reusePages/footerRare.php'); 
        }
    ?>

