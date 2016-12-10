<div class="header">
    <div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Chic Clothing logo" /></a>
    </div><!--logo ends-->
    <div class="navigation">
        <?php
        $cat_sql="select * from subjects";
        $cat_query=mysqli ($dbconnect, $cat_sql);
        $cat_rs=mysqli_fetch_assoc($cat_query);
?>
        <p> <?php
        do {

        echo $cat_rs['name'];
        } while($cat_rs=mysqli_fetch_assoc($cat_query))


            ?>
            <a href="admin.php">Admin</a>
        </p>
    </div><!--navigation ends-->
</div><!-- Header ends here-->