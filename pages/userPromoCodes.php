<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    unset($_SESSION['offers']);
    $email=$_SESSION['user'];
    $sql = "SELECT * FROM order_detail WHERE customer_email='$email'";
    $result = mysqli_query($conn, $sql);
    $codes=$_SESSION['codes']
?>
<?php include('../reusePages/base.php') ?>
    <div class="foods">
    <?php include('./navbar.php') ?>
      <div class="foods_menu_top" style="flex-direction:column;">
        <h2 class="food_menu_title">Promo Codes Section</h2>
        <hr>
        <?php
          $count=0;
          $counter=0;
          while($counter<=(int)(sizeof($codes)/2))
          {
        ?>
          <div class="food_item_line" style="width:70%;">
          <?php
            $innerCount=0;
            while(true) {
              if($innerCount==2 or $count>=sizeof($codes)){
                break;
              }
              $row = $codes[$count];
              $count+=1;
          ?>
            <div class="promocode">
                <div class="promocode_left">
                    <h2>COUPON</h2>
                    <p class="offer"><?php echo $row[0]?></p>
                    <p>EXPIRATIONAL DATE: <?php echo $row[1]?></p>
                </div>
                <div class="promocode_right">
                    <h4 style="padding-bottom:8px">CODE: <?php echo $row[2]?></h4>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlj115eigssHkIJ4oGvHhiGH6nQX-VhX_y0Q&usqp=CAU" alt="">
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
<?php include('../reusePages/footerRare.php') ?>