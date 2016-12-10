
<?php
$stock_sql="select * from pages";


if($stock_query=mysqli_query($connection,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}


    ?>
    <h1><?php echo $stock_rs['catname']; ?></h1>
    <?php do {
        ?>
        <div class="item">
            <p><?php echo $stock_rs['menu_name']; ?></p>
            <p>$<?php echo $stock_rs['content']; ?></p>
        </div>
        <?php
    } while ($stock_rs=mysqli_fetch_assoc($stock_query));
    ?>
    <?php
}
?>
