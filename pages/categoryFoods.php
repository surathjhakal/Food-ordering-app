<?php include('../config/constants.php') ?>
<?php 
  $id=$_GET['id'];
  $category=$_GET['category'];
  $sql="SELECT * FROM food WHERE category_id=$id";
  $result=mysqli_query($conn,$sql);
  $count=0;
?>
<?php include('reuseComponents/base.php') ?>
    <div class="category_foods">
    <?php include('reuseComponents/navbar.php') ?>
      <div class="food_menu_top">
        <div class="food_menu">
          <h2 class="food_menu_title">Food Items in "<?php echo $category; ?>"</h2>
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
<?php include('reuseComponents/footer.php') ?>
