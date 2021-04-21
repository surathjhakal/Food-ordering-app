<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
    if(!isset($_SESSION['order'])){
        echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
    }
?>
<?php
  $id=$_GET['id'];
  $sql="SELECT * FROM food WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($result);

?>

<?php include('../reusePages/base.php') ?>
    <div class="food_order">
    <?php include('./navbar.php') ?>
    <div class="payment">
      <div class="payment_header">
        <h1>Confirm Order</h1>
        <p><i class="fas fa-times"></i></p>
      </div>
      <hr />
      <div class="payment_info">
        <div class="payment_ticket_details">
          <div class="payment_ticket_image">
            <div class="payment_ticket_header"></div>
            <img
              src="../images/<?php echo $data["image_name"]; ?>"
              alt="ticket_image"
            />
            <div class="payment_ticket_info">
              <h1><?php echo $data["title"]; ?></h1>
              <div class="payment_ticket_price">
                <p class="payment_ticket_price_value">₹<?php echo $_SESSION['order_data'][5]?></p>
                <p>⭐⭐⭐⭐⭐</p>
              </div>
              <p>Qnty: <?php echo $_SESSION['order_data'][4]?></p>
            </div>
          </div>
          <div class="payment_cards">
            <img
              src="https://www.pngfind.com/pngs/m/471-4717614_visa-logo-png-transparent-visa-card-vector-png.png"
              id="visa"
            />
            <img
              id="master"
              src="https://img.favpng.com/0/12/17/mastercard-credit-card-payment-visa-nyse-ma-png-favpng-n2pqLqnZWVqJSFS9UmqsPydSN.jpg"
            />
            <img
              id="rupay"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8hzHuv8J7mTWG20pUkA21BZHJoBx9j8P3IjY0ZZGMuJvN3KcT-JfrtdUVo1_6BrXpj5M&usqp=CAU"
            />
            <img
              id="maestro"
              src="https://cdn1.iconfinder.com/data/icons/credit-card-icons/512/maestro.png"
            />
          </div>
        </div>
        <div class="payment_details">
          <div class="payment_details_firstLine">
            <div class="payment_details_firstLine_name">
              <p>Name on Card</p>
              <input type="text" placeholder="Your Name" />
            </div>
            <div class="payment_details_firstLine_postal">
              <p>Postal Code</p>
              <input type="number" placeholder="Your Name" />
            </div>
          </div>
          <div class="payment_details_secondLine">
            <p>Card Number (no spaces or dashes)</p>
            <input type="text" placeholder="0123XXXXXXXXXXXX" />
          </div>
          <div class="payment_details_thirdLine">
            <div class="payment_details_thirdLine_expiration">
              <div class="expire_info">
                <p>Expiration</p>
                <div class="expire_date">
                  <input type="number" placeholder="MM" />
                  <p>/</p>
                  <input type="number" placeholder="YY" />
                </div>
              </div>
              <div class="expire_cvv">
                <p>CVV</p>
                <input type="number" placeholder="123" />
              </div>
            </div>
          </div>
          <form action="" method="POST">
          <button type="submit" name="submit" class="pay_now">Pay Now</button>
          </form>
        </div>
      </div>
    </div>
    </div> 
    <?php include('../reusePages/footerRare.php') ?>
    <?php
    if(isset($_POST['submit'])){
        date_default_timezone_set("Asia/Kolkata");
        echo $customer_name=$_SESSION['order_data'][0];
        $customer_contact=$_SESSION['order_data'][1];
        $customer_email=$_SESSION['order_data'][2];
        $customer_address=$_SESSION['order_data'][3];
        $quantity=$_SESSION['order_data'][4];
        $total=$_SESSION['order_data'][5];
        $date=date('Y-m-d H:i:s');

        $sql_order_query="INSERT INTO order_detail (food_id,quantity,total,status,customer_name,customer_contact,customer_email,customer_address,order_time) 
        VALUES ('$id','$quantity','$total','active','$customer_name','$customer_contact','$customer_email','$customer_address','$date') "; 
        $result2=mysqli_query($conn,$sql_order_query);
        if($result2){
            unset($_SESSION['order']);
            unset($_SESSION['order_data']);
          $_SESSION['order_confirmed']="Your order has been confirmed $customer_name, Hurray!!!";
          echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
        }else{
          $_SESSION['order_confirmed']="Your order has not been confirmed because of some technical issue";
        }
        mysqli_close($conn);
      }
    ?>