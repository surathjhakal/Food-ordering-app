<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php
  $email=$_SESSION['user'];
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  $row=mysqli_fetch_assoc($result)
  
?>

<?php include('../reusePages/base.php') ?>
    <div class="food_categories">
    <?php include('./navbar.php') ?>
        <div class="profilePage_top">
        <div class="profilePage">
            <div class="profilePage_header">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCvhclL5SPZa_Qqm-Q1i5wxvp4xjkNsJQAMnNuhERn31DXHuWC-YpVgEt5Ua_juj2_7KM&usqp=CAU"
                alt="image"
                class="profilePage_image"
            />
            <div class="profilePage_header_info">
                <h2><?php echo $row['full_name']?></h2>
                <p><?php echo $row['location']?></p>
            </div>
            </div>
            <form method="POST" action="" class="profilePage_info" id="pp">
            <div class="profilePage_info_line1">
                <div class="profilePage_name">
                <p>Name</p>
                <input
                    type="text"
                    name="firstName"
                    placeholder="Enter your Name"
                    value="<?php echo explode(" ", $row['full_name'])[0] ?>"
                />
                </div>
                <div class="profilePage_name">
                <p>Last Name</p>
                <input
                    type="text"
                    placeholder="Enter your last name"
                    name="lastName"
                    value="<?php echo explode(" ", $row['full_name'])[1] ?>"
                />
                </div>
            </div>
            <div class="profilePage_info_line2">
                <div class="profilePage_email">
                <p>Email Address</p>
                <input type="text" placeholder="Enter your email" value="<?php echo $row['email']?>" readonly/>
                </div>
                <div class="profilePage_password">
                <p>Password</p>
                <input type="text" placeholder="••••••••" readonly/>
                </div>
            </div>
            <div class="profilePage_info_line3">
                <div class="profilePage_phoneNumber">
                <p>Phone Number</p>
                <input type="number" name="phoneNo" placeholder="Enter your phone no." value="<?php echo $row['phone']?>" />
                </div>
                <div class="profilePage_gender">
                <p>Gender</p>
                <input
                    type="text"
                    placeholder="e.g. Male or Female"
                    name="gender"
                    value="<?php echo $row['gender']?>"
                />
                </div>
            </div>
            <div class="profilePage_info_line4">
                <div class="profilePage_location">
                <p>Location</p>
                <input
                    type="text"
                    placeholder="e.g. Mumbai,India"
                    name="location"
                    value="<?php echo $row['location']?>"
                />
                </div>
                <div class="profilePage_postal_code">
                <p>Postal Code</p>
                <input
                    type="number"
                    placeholder="e.g. 327684"
                    name="postal_code"
                    value="<?php echo $row['postal_code']?>"
                />
                </div>
            </div>
            </form>
            <div class="profilePage_save_changes">
            <button type="submit" name="submit" form="pp">
                Save Changes
            </button>
            </div>
        </div>
    </div>
</div>
<?php include('../reusePages/footer.php') ?>

<?php
    if(isset($_POST['submit'])){
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $phoneNo=$_POST['phoneNo'];
        $gender=$_POST['gender'];
        $location=$_POST['location'];
        $postal_code=$_POST['postal_code'];

        $sql_order_query="UPDATE users SET full_name='$firstName $lastName',phone='$phoneNo',gender='$gender',location='$location',postal_code='$postal_code' WHERE email='$email'"; 

        $result1=mysqli_query($conn,$sql_order_query);

        if($result1){
            echo "<script type='text/javascript'>  window.location=''; </script>";
        }else{
            echo "<script type='text/javascript'>  window.location=''; </script>";
        }
    }
?>
