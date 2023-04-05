<?php include('../config/constants.php') ?>
<?php
    if(isset($_SESSION['user'])){
        echo "<script type='text/javascript'>  window.location='.index.php'; </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurent app</title>
    <link rel="stylesheet" href="../css/auth.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="adminLogin">
    <div class="brand_name">Swigato</div>
        <hr>
        <h1 class="adminLoginTitle">Registration Form</h1>
        <form class="adminLoginForm" style="height:440px" method="POST" action="">
            <?php
                if(isset($_SESSION['not_registered'])){
                    $message=$_SESSION['not_registered'];
                    echo "<h3 style='color:red'>($message)</h3>";
                    echo "<hr><br>";
                    unset($_SESSION['not_registered']);
                }
            ?>
            <p class="inputTitle">Full Name:</p>
            <input class="inputVal" name="fullName" type="text">
            <p class="inputTitle">Phone No:</p>
            <input class="inputVal" name="phoneNo" type="text">
            <p class="inputTitle">Email Address:</p>
            <input class="inputVal" name="email" type="email">
            <p class="inputTitle">Password:</p>
            <input class="inputVal" name="password" type="password">
            <button type="submit" name="submit" class="loginButton">Register</button>
            <p class="account">Have an Account? <a class="account_check" href="./userLogin.php">Click Here</a></p>
        </form>
    </div>
</body>
<?php include('../reusePages/footerRare.php')?>

<?php
    if(isset($_POST['submit'])){
        $fullName=$_POST['fullName'];
        $phoneNo=$_POST['phoneNo'];
        $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
        $email=$_POST['email'];

        $sql_order_query="SELECT * FROM users WHERE email='$email' OR phone='$phoneNo'";
        $result=mysqli_query($conn,$sql_order_query);

        if(mysqli_num_rows($result)<1){
            $sqlInsert="INSERT INTO users (full_name,email,password,phone) VALUES ('$fullName','$email','$password','$phoneNo')";
            $result1=mysqli_query($conn,$sqlInsert);
            if($result1){
                $_SESSION['registered']="You have successfully created your account, Now login!!";
                echo "<script type='text/javascript'>  window.location='./userLogin.php'; </script>";
            }
        }else{
            $_SESSION['not_registered']="Your email or phone number has been registered earlier";
            echo "<script type='text/javascript'>  window.location=''; </script>";
        }
    }
?>