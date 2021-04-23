<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
  $sql = "SELECT * FROM food WHERE featured='true'";
  $result = mysqli_query($conn, $sql);
  $count=0;
  $codes=[['75%','30.30.30','FIRST'],['40%','30.30.30','TRYNEW'],['50%','30.30.30','APRIL']];
  $_SESSION['codes']=$codes;
?>
<?php include('../reusePages/base.php') ?>
    <div class="food_app">
      <?php include('./navbar.php') ?>
      <div class="food_content">
      <?php include('../reusePages/banner.php') ?>
        <div class="food_menu_top">
          <div class="food_menu">
            <?php
              if(isset($_SESSION['order_confirmed'])){
                echo "<p style='text-align:center;font-size:1.6rem;color:green'>(";
                echo $_SESSION['order_confirmed'];
                echo ")</p>";
                unset($_SESSION['order_confirmed']);
              }
            ?>
            <?php
              if(isset($_SESSION['order_cancelled'])){
                echo "<p style='text-align:center;font-size:1.6rem;color:red'>(";
                echo $_SESSION['order_cancelled'];
                echo ")</p>";
                unset($_SESSION['order_cancelled']);
              }
            ?>
            <?php
              if(isset($_SESSION['message_posted'])){
                echo "<p style='text-align:center;font-size:1.6rem;color:green'>(";
                echo $_SESSION['message_posted'];
                echo ")</p>";
                unset($_SESSION['message_posted']);
              }
            ?>
            <h2 class="food_menu_title">Top Rated Food</h2>
            <?php 
              $counter=0;
              while($counter<((int)mysqli_num_rows($result)/2) and $counter<5)
              {
            ?>
            <div class="food_item_line">
            <?php
              $innerCount=0;
              while(true) {
                if($innerCount==2 or $count>=mysqli_num_rows($result)){
                  break;
                }
                $row = mysqli_fetch_assoc($result);
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
                <p class="food_price"><?php echo "₹".$row["price"]; ?></p>
                <p class="food_detail">
                  Made with lots of something..
                </p>
                <p class="food_star">⭐⭐⭐⭐⭐</p>
                <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $row['id'] ?>" class="food_menu_orderNow">Order Now</a>
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
          mysqli_close($conn);
        ?>
            </div>
          </div>
        </div>
  <?php include('../reusePages/footer.php') ?>
