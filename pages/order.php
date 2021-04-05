<?php include('reuseComponents/base.php') ?>
    <div class="food_order">
    <?php include('reuseComponents/navbar.php') ?>
      <div class="food_order_content">
        <h2 class="food_order_content_title">
          Fill this form to confirm your order.
        </h2>
        <hr />
        <form action="#" class="food_order_form">
          <fieldset class="selected_food">
            <legend>Selected Food</legend>

            <div class="food_order_imgage_top">
              <img
                src="../images/menu-pizza.jpg"
                alt="Chicke Hawain Pizza"
                class="food_order_image"
              />
            </div>

            <div class="food_order_info">
              <h3>My Pizza</h3>
              <p class="food_price">$2.3</p>

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
