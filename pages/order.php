<?php include('../config/constants.php') ?>
<?php
  $id=$_GET['id'];
  $sql="SELECT * FROM food WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($result);
  mysqli_close($conn);
?>

<?php include('reuseComponents/base.php') ?>
    <div class="food_order">
    <?php include('reuseComponents/navbar.php') ?>
      <div class="food_order_content">
        <h2 class="food_order_content_title">
          Confirm your order.
        </h2>
        <hr />
        <form action="#" class="food_order_form">
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
                name="qty"
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
            />

            <div class="user_info_title">Phone Number</div>
            <input
              type="number"
              name="contact"
              placeholder="E.g. 9843xxxxxx"
              class="user_data_info"
              required
            />

            <div class="user_info_title">Email</div>
            <input
              type="email"
              name="email"
              placeholder="E.g. jhakal.surath@gmail.com"
              class="user_data_info"
              required
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
      <?php include('reuseComponents/footer.php') ?>