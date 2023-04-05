    </div>
    </nav>
    <div class="page">
        <h1>Hello, <?php if(isset($row['full_name'])) echo explode(" ", $row['full_name'])[0]  ?></h1>
        <a href="./userProfile.php">Your Profile </a>
        <?php  
          if(isset($_SESSION['notify'])){
            echo "<a href='./notifications.php'>Notifications<span class='star'>✱<span></a>";
          }
          else{
            echo "<a href='./notifications.php'>Notifications</a>";
          }
        ?>
        <?php  
          if(isset($_SESSION['order_notify'])){
            echo "<a href='./userOrders.php'>Your Orders<span class='star'>✱<span></a>";
          }
          else{
            echo "<a href='./userOrders.php'>Your Orders</a>";
          }
        ?>
        <?php  
          if(isset($_SESSION['offers'])){
            echo "<a href='./userPromoCodes.php'>Promo Codes<span class='star'>✱<span></a>";
          }
          else{
            echo "<a href='./userPromoCodes.php'>Promo Codes</a>";
          }
        ?>
        <a href="#">About Us</a>
        <a href="#">Settings</a>
        <a href="./userLogout.php">Logout </a>
      </div>
    