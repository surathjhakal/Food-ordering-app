<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>

<?php include('../reusePages/base.php') ?>
        <?php include('./navbar.php') ?>
        <div class="contactUs">
        <div class="leftSide">
            <h1 class="contactUs_title">Get in Touch</h1>
            <p style="padding-bottom:0.4rem">
                Please fill out the form and we will be in touch with lightening speed.
            </p>
            <form class="contactUs_form" action="" method="POST">
                <input class="contactUs_inputs" name="contactUs_name" type="text" placeholder="Name">
                <input class="contactUs_inputs" name="contactUs_email" type="email" placeholder="Your email address">
                <textarea class="contactUs_inputs" name="contactUs_message" cols="30" rows="4" placeholder="Message"></textarea>
                <button class="contactUs_submit" name="submit" type="submit">SUBMIT</button>
            </form>
        </div>
        <div class="rightSide">
            <div class="contactUs_line">
                <h4 class="rightSide_Heading">Connect with us:</h4>
                <p class="p_tag">For support or any questions:</p>
                <p class="p_tag">Email us at: <span style="color:#54c6be">support@yummy.com</span></p>
            </div>
            <div class="contactUs_line">
                <h4 class="rightSide_Heading">Yummy Singapore</h4>
                <p class="p_tag">Bunglow no., 200,</p>
                <p class="p_tag">CHini road,next to some where,</p>
                <p class="p_tag">Singapore</p>
            </div>
            <div class="contactUs_line">
                <h4 class="rightSide_Heading">Yummy India</h4>
                <p class="p_tag">Haweli no., 403,</p>
                <p class="p_tag">CHini road,next to some where,</p>
                <p class="p_tag">India</p>
            </div>
        </div>
    </div>
<?php include('../reusePages/footerRare.php'); ?>
<?php 
    if(isset($_POST['submit'])){
        $_SESSION['message_posted']="We have recieved your mail & We'll get back to you as soon as possible";
        echo "<script type='text/javascript'>  window.location='./index.php'; </script>";
    }
?>

