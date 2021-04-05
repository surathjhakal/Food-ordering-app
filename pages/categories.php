<?php include('../config/constants.php') ?>
<?php

  $sql = "SELECT id,title, image_name, active FROM category";
  $result = mysqli_query($conn, $sql);
  
?>
<?php include('reuseComponents/base.php') ?>
    <div class="food_categories">
    <?php include('reuseComponents/navbar.php') ?>
      <div class="food_categories_content">
        <h2 class="food_categories_title">All Categories of Food</h2>
        <?php 
          $counter=0;
          while($counter<((int)mysqli_num_rows($result)/3)){

        ?>
        <div class="food_categories_line">
        
          <?php
            $innerCount=0;
            while(true) {
              if($innerCount==3){
                break;
              }
              $row = mysqli_fetch_assoc($result);
          ?>
          
          <a
            class="food_categories_box"
            href="<?php echo SITEURL; ?>categoryFoods.php?id=<?php echo $row['id'] ?>&category=<?php echo $row['title']; ?>"
          >
          <img class="food_categories_background_image" src="../images/<?php echo $row["image_name"]; ?>" alt="">
            <h3 class="food_name"><?php echo $row["title"]; ?></h3>
          </a>
          <?php
            $innerCount+=1;
            }
          ?>
        </div>
        <?php
        $counter+=1;
          }
          mysqli_close($conn);
        ?>
      </div>
    </div>

    <?php include('reuseComponents/footer.php') ?>

    <?php include('../config/constants.php') ?>