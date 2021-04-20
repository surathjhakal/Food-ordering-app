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
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <div class="adminLogin">
        <img
            src="https://media4.giphy.com/media/cdJFgAkVX8izFZ5fj9/source.gif"
            class="food_logo"
            alt=""
        />
        <hr>
        <h1 class="adminLoginTitle">Login Here</h1>
        <form class="adminLoginForm" method="POST" action="">
        <?php
                if(isset($_SESSION['registered'])){
                    $message=$_SESSION['registered'];
                    echo "<h2 style='color:green'>($message)</h3>";
                    echo "<hr><br>";
                    unset($_SESSION['registered']);
                }
            ?>
            <?php
                if(isset($_SESSION['wrong_password'])){
                    $message=$_SESSION['wrong_password'];
                    echo "<h2 style='color:red'>($message)</h3>";
                    echo "<hr><br>";
                    unset($_SESSION['wrong_password']);
                }
            ?>
            <p class="inputTitle">Email Address:</p>
            <input class="inputVal" name="email" type="email">
            <p class="inputTitle">Password:</p>
            <input class="inputVal" name="password" type="password">
            <button type="submit" name="submit" class="loginButton">Login</button>
            <p class="account">Don't Have an Account? <a class="account_check" href="./userRegister.php">Click Here</a></p>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $password=$_POST['password'];
        $email=$_POST['email'];

        $sql_order_query="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$sql_order_query);

        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if(password_verify($password,$row['password'])){
                $_SESSION['user']= $email;
                echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
            }else{
                $_SESSION['wrong_password']="Wrong password entered!!";
                echo "<script type='text/javascript'>  window.location=''; </script>";
            }
        }
    }
?>