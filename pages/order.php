<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
  $id=$_GET['id'];
  $sql="SELECT * FROM food WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($result);

  $email=$_SESSION['user'];
  $sql1 = "SELECT * FROM users WHERE email='$email'";
  $result1 = mysqli_query($conn, $sql1);
  $row1=mysqli_fetch_assoc($result1)
?>

<?php include('../reusePages/base.php') ?>
    <div class="food_order">
    <?php include('./navbar.php') ?>
      <div class="food_order_content">
        <h2 class="food_order_content_title">
          Confirm your order
        </h2>
        <hr />
        <form action="" method="POST" class="food_order_form">
          <fieldset class="selected_food">
            <legend>Selected Food</legend>

            <div class="food_order_imgage_top">
              <img
                src="../images/<?php echo $data["image_name"]; ?>"
                alt="food image"
                class="food_order_image"
              />
            </div>

            <div class="food_order_info">
              <h3><?php echo $data["title"]; ?></h3>
              <p class="food_price"><?php echo "₹".$data["price"]; ?></p>

              <div>Quantity</div>
              <input
                type="number"
                name="quantity"
                class="food_quantity"
                value="1"
                required
              />
            </div>
          </fieldset>

          <fieldset class="user_data">
            <legend>Delivery Details</legend>
            <div class="user_info_title">Full Name</div>
            <input
              type="text"
              name="fullName"
              placeholder="E.g. Surath Jhakal"
              class="user_data_info"
              required
              value="<?php echo $row1['full_name'] ?>"
            />

            <div class="user_info_title">Phone Number</div>
            <input
              type="number"
              name="contact"
              placeholder="E.g. 9843xxxxxx"
              class="user_data_info"
              required
              value="<?php echo $row1['phone'] ?>"
            />

            <div class="user_info_title">Email</div>
            <input
              type="email"
              name="email"
              placeholder="E.g. jhakal.surath@gmail.com"
              class="user_data_info"
              required
              value="<?php echo $email ?>"
            />

            <div class="user_info_title">Address</div>
            <textarea
              name="address"
              rows="10"
              placeholder="E.g. Street, City, Country"
              class="user_data_info"
              required
            ></textarea>

            <input
              type="submit"
              name="submit"
              value="Confirm Order"
              class="order_submit"
            />
          </fieldset>
        </form>
      </div>
    </div> 
    <?php include('../reusePages/footer.php') ?>
    <?php
    if(isset($_POST['submit'])){
        $customer_name=$_POST['fullName'];
        $customer_contact=$_POST['contact'];
        $customer_email=$_POST['email'];
        $customer_address=$_POST['address'];
        $quantity=$_POST['quantity'];
        $total=(double)$quantity*$data['price'];
        $_SESSION['order']=true;
        $_SESSION['order_data']=[$customer_name, $customer_contact, $customer_email, $customer_address, $quantity, $total];
        echo "<script type='text/javascript'>  window.location='./payment.php?id=$id'; </script>";
        mysqli_close($conn);
      }
    ?>