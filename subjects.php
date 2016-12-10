<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<?php
$stock_sql="SELECT menu_name,content FROM pages JOIN subjects ON pages.subject_id=subjects.id WHERE pages.subject_id=1";


if($stock_query=mysqli_query($connection,$stock_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}

if(mysqli_num_rows($stock_query)==0) {
    echo "Sorry, we have no items currently in stock";
} else {
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
