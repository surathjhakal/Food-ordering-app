<?php include('../config/constants.php') ?>
<?php include('./loginCheck.php') ?>
<?php include('../reusePages/base.php') ?>
<?php
    $query=[['Categories','SELECT * FROM category'],['Foods','SELECT * FROM food'],['Total Orders','SELECT * FROM order_detail WHERE status="Delivered"'],['Revenue','SELECT total FROM order_detail WHERE status="Delivered"']]
?>
<div class="admin">
    <?php include('./navbar.php') ?>
    <div class="admin_dashboard" style="margin:auto;width:90%">
        <h1 style="margin:1.6rem 0;text-align:center;">Admin Dashboard / Overview</h1>
        <hr>
        <div class="admin_dashboard_box">
            <?php
                $i=0;
                while($i<sizeof($query)){
                    $result=mysqli_query($conn,$query[$i][1]);
                    $rows=mysqli_num_rows($result);
                    if($i==3){
                        $total=0;
                        while($data=mysqli_fetch_assoc($result)){
                            $total+=$data['total'];
                        }
                        $rows=$total;
                    }
                    ?>
                        <div class="board" style="background:white;margin:0 2rem;padding:4rem;text-align:center">
                            <h1><?php if($i==3){echo "₹";} echo $rows ?></h1>
                            <h4><?php echo $query[$i][0] ?></h4>
                        </div>
                    <?php
                    $i++;
                }
            ?>
        </div>
    </div>
</div>
<?php include('../reusePages/footerRare.php') ?>
