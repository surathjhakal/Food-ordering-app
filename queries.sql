CREATE DATABASE food_order;
CREATE TABLE adminTable (
  id INT AUTO_INCREMENT,
  full_name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  PRIMARY KEY(id)
);
CREATE TABLE category (
  id INT AUTO_INCREMENT,
  title VARCHAR(255),
  image_name VARCHAR(255),
  active VARCHAR(20),
  PRIMARY KEY(id)
);
CREATE TABLE food (
  id INT AUTO_INCREMENT,
  title VARCHAR(255),
  price INT,
  image_name VARCHAR(255),
  category_id INT,
  featured VARCHAR(255),
  active VARCHAR(255),
  PRIMARY KEY(id),
  FOREIGN KEY(category_id) REFERENCES category(id)
);
CREATE TABLE users (
  id INT AUTO_INCREMENT,
  full_name VARCHAR(255),
  phone VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  location VARCHAR(255),
  gender VARCHAR(255),
  postal_code INT,
  PRIMARY KEY(id)
);
CREATE TABLE order_detail (
  id INT AUTO_INCREMENT,
  food_id INT,
  quantity INT,
  total INT,
  status VARCHAR(255),
  customer_id INT,
  customer_name VARCHAR(255),
  customer_contact VARCHAR(255),
  customer_email VARCHAR(255),
  customer_address VARCHAR(255),
  order_time DATETIME,
  PRIMARY KEY(id),
  FOREIGN KEY(food_id) REFERENCES food(id),
  FOREIGN KEY(customer_id) REFERENCES users(id)
);
INSERT INTO category (title, image_name, active)
VALUES ('Burger', 'category_burger.jpg', 'true'),
  ('Paratha', 'matar_paratha.jpg', 'true'),
  ('Juice', 'apple_juice.jpg', 'true'),
  (
    'Ice Cream',
    'black_currant_ice_cream.jpg',
    'true'
  ),
  ('Cake & Pastry', 'black_forest_cake.jpg', 'true'),
  ('Pasta', 'white_sauce_pasta.jpg', 'true'),
  ('Biryani', 'chicken_biryani.jpg', 'true'),
  ('Wrap', 'paneer_wrap.jpg', 'true'),
  ('Momo', 'category_momo.jpg', 'true'),
  ('Shake', 'chocolate_shake.jpg', 'true'),
  ('Chinese', 'fried_rice.jpg', 'true'),
  ('Soup', 'sweet_corn_soup.jpg', 'true'),
  ('Waffles', 'chocolate_waffles.jpg', 'true'),
  ('Sandwich', 'grilled_sandwich.jpeg', 'true'),
  ('South Indian', 'masala_dosa.jpg', 'true'),
  ('Waffles', 'chocolate_waffles.jpg', 'true'),
  ('Street Corner', 'pav_bhaji.jpg', 'true'),
  ('Pizza', 'category_pizza.jpg', 'true');
INSERT INTO food (
    title,
    price,
    image_name,
    category_id,
    featured,
    active
  )
VALUES (
    'Aalo Tikki Burger',
    100,
    'aalo_tikki_burger.jpg',
    1,
    'true',
    'true'
  ),
  (
    'Aalo Paratha',
    100,
    'aalo_paratha.jpg',
    2,
    'false',
    'true'
  ),
  (
    'Apple Juice',
    100,
    'apple_juice.jpg',
    3,
    'false',
    'true'
  ),
  (
    'Black Currant Ice Cream',
    100,
    'black_currant_ice_cream.jpg',
    4,
    'true',
    'true'
  ),
  (
    'Black Forest Cake',
    100,
    'black_forest_cake.jpg',
    5,
    'false',
    'true'
  ),
  (
    'Butterscotch Ice Cream',
    100,
    'butterscotch_ice_cream.jpg',
    4,
    'false',
    'true'
  ),
  (
    'Chicken Biryani',
    100,
    'chicken_biryani.jpg',
    7,
    'false',
    'true'
  ),
  (
    'Chicken Wrap',
    100,
    'chicken_wrap.jpg',
    8,
    'true',
    'true'
  ),
  (
    'Chocolate Ice Cream',
    100,
    'chocolate_ice_cream.jpg',
    4,
    'true',
    'true'
  ),
  (
    'Chocolate Oreo Cake',
    100,
    'chocolate_oreo_cake.jpg',
    5,
    'false',
    'true'
  ),
  (
    'Chocolate Pastry',
    100,
    'chocolate_pastry.jpg',
    5,
    'false',
    'true'
  ),
  (
    'Chocolate Shake',
    100,
    'chocolate_shake.jpg',
    10,
    'true',
    'true'
  ),
  (
    'Chocolate Waffle',
    100,
    'chocolate_waffles.jpg',
    16,
    'false',
    'true'
  ),
  (
    'French Fries',
    100,
    'french_fries.jpg',
    1,
    'false',
    'true'
  ),
  (
    'Fried Rice',
    100,
    'fried_rice.jpg',
    11,
    'false',
    'true'
  ),
  (
    'Grilled Sandwich',
    100,
    'grilled_sandwich.jpeg',
    14,
    'false',
    'true'
  ),
  ('Maggi', 100, 'maggi.jpg', 17, 'true', 'true'),
  (
    'Manchow Soup',
    100,
    'manchow_soup.jpg',
    12,
    'false',
    'true'
  ),
  (
    'Margerita Pizza',
    100,
    'margerita_pizza.jpeg',
    18,
    'false',
    'true'
  ),
  (
    'Masala Dosa',
    100,
    'masala_dosa.jpg',
    15,
    'true',
    'true'
  ),
  (
    'Matar Paratha',
    100,
    'matar_paratha.jpg',
    2,
    'false',
    'true'
  ),
  (
    'Mysore Masala Dosa',
    100,
    'mysore_masala_dosa.jpg',
    15,
    'false',
    'true'
  ),
  (
    'Paneer Pizza',
    100,
    'paneer_pizza.jpg',
    18,
    'false',
    'true'
  ),
  (
    'Paneer Sandwich',
    100,
    'paneer_sandwich.jpg',
    14,
    'true',
    'true'
  ),
  (
    'Paneer Wrap',
    100,
    'paneer_wrap.jpg',
    8,
    'true',
    'true'
  ),
  (
    'Papaya Shake',
    100,
    'papaya_shake.jpeg',
    10,
    'false',
    'true'
  ),
  (
    'Pav Bhaji',
    100,
    'pav_bhaji.jpg',
    17,
    'false',
    'true'
  ),
  (
    'Ragda Patties',
    100,
    'ragda_patties.jpg',
    17,
    'true',
    'true'
  ),
  (
    'Rava Dosa',
    100,
    'rava_dosa.jpg',
    15,
    'true',
    'true'
  ),
  (
    'Red Sauce Pasta',
    100,
    'red_sauce_pasta.jpeg',
    6,
    'true',
    'true'
  ),
  (
    'Red Velvet Waffle',
    100,
    'red_velvet_waffles.jpg',
    16,
    'true',
    'true'
  ),
  (
    'Sev Puri',
    100,
    'sev_puri.jpg',
    17,
    'false',
    'true'
  ),
  (
    'Strawberry Juice',
    100,
    'strawberry_juice.jpg',
    3,
    'false',
    'true'
  ),
  (
    'Strawberry Pastry',
    100,
    'strawberry_pastry.jpg',
    5,
    'true',
    'true'
  ),
  (
    'Sweet Corn Soup',
    100,
    'sweet_corn_soup.jpg',
    12,
    'false',
    'true'
  ),
  (
    'Tandoori Momos',
    100,
    'tandoori_momos.jpg',
    9,
    'true',
    'true'
  ),
  (
    'Tomato Soup',
    100,
    'tomato_soup.jpg',
    12,
    'false',
    'true'
  ),
  (
    'Vada Pav',
    100,
    'vada_pav.jpg',
    17,
    'true',
    'true'
  ),
  (
    'Veg Biryani',
    100,
    'veg_biryani.jpg',
    7,
    'false',
    'true'
  ),
  (
    'Veg Mayonise Sandwich',
    100,
    'veg_mayonise_sandwich.jpg',
    14,
    'false',
    'true'
  ),
  (
    'Veg Momos',
    100,
    'veg_momos.jpg',
    9,
    'false',
    'true'
  ),
  (
    'Veg Noodles',
    100,
    'veg_noodles.jpg',
    11,
    'true',
    'true'
  ),
  (
    'Veggie Burger',
    100,
    'veggie_burger.jpeg',
    1,
    'true',
    'true'
  ),
  (
    'Veggie Pizza',
    100,
    'veggie_pizza.jpg',
    18,
    'false',
    'true'
  ),
  (
    'Watermelon Juice',
    100,
    'watermelon_juice.jpg',
    3,
    'false',
    'true'
  ),
  (
    'White Sauce Pasta',
    100,
    'white_sauce_pasta.jpg',
    6,
    'false',
    'true'
  );