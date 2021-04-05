<?php include('../config/constants.php') ?>
<?php

  $sql = "SELECT title, image_name, price FROM food";
  $result = mysqli_query($conn, $sql);
  
?>
<?php include('reuseComponents/base.php') ?>
    <div class="foods">
    <?php include('reuseComponents/navbar.php') ?>
      <div class="foods_menu_top">
        <div class="food_menu">
          <h2 class="food_menu_title">All Food Items</h2>
          <input
            type="text"
            placeholder="Enter your favourite food name"
            class="food_search"
          />
          <hr />
          <?php 
          $counter=0;
          while($counter<((int)mysqli_num_rows($result)/2))
          {
        ?>
          <div class="food_item_line">
          <?php
            $innerCount=0;
            while(true) {
              if($innerCount==2){
                break;
              }
              $row = mysqli_fetch_assoc($result);
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
                <a href="order.php" class="food_menu_orderNow">Order Now</a>
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
  <?php include('reuseComponents/footer.php') ?>
