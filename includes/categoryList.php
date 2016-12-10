<?php
$cat_sql="SELECT * FROM subjects";
$cat_query=mysqli_query($connection, $cat_sql);
$cat_rs=mysqli_fetch_assoc($cat_query);

do { ?>
<a href="index.php?page=category&id=<?php echo $cat_rs['id']; ?>"><?php echo $cat_rs['menu_name']; ?></a>

<?php

} while ($cat_rs=mysqli_fetch_assoc($cat_query))

    ?>