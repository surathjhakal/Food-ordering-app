<?php include('reuseComponents/base.php') ?>
    <div class="food_app">
      <?php include('reuseComponents/navbar.php') ?>
      <div class="food_content">
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="../images/carousel_pizza.jpg"
                class="d-block w-100 carousel_images"
                alt="images"
              />
            </div>
            <div class="carousel-item">
              <img
                src="../images/carousel_burger.jpg"
                class="d-block w-100 carousel_images"
                alt="images"
              />
            </div>
            <div class="carousel-item">
              <img
                src="../images/carousel_pasta.jpg"
                class="d-block w-100 carousel_images"
                alt="images"
              />
            </div>
            <div class="carousel-item">
                <img
                  src="../images/carousel_cake.jpg"
                  class="d-block w-100 carousel_images"
                  alt="images"
                />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="food_menu_top">
          <div class="food_menu">
            <h2 class="food_menu_title">Top Rated Food</h2>
            <div class="food_item_line">
              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-pizza.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>My Pizza</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>

              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-burger.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>Nice Burger</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>
            </div>
            <br />
            <div class="food_item_line">
              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-momo.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>My Momo</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>

              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-pizza.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>My Pizza</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>
            </div>
            <br />
            <div class="food_item_line">
              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-burger.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>Nice Burger</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>

              <div class="food_item">
                <div class="food_item_image">
                  <img
                    src="../images/menu-momo.jpg"
                    class="food_menu_image"
                    alt="food_image"
                  />
                </div>
                <div class="food_item_info">
                  <h4>My Momo</h4>
                  <p class="food_price">$2.3</p>
                  <p class="food_detail">
                    Made with Italian Sauce, Chicken, and organice vegetables.
                  </p>
                  <p class="food_star">⭐⭐⭐⭐</p>
                  <a href="order.html" class="food_menu_orderNow">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include('reuseComponents/footer.php') ?>
        
