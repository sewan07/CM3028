<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<ul class="subjects">
    <?php
    $query  = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";
    $subject_set = mysqli_query($connection, $query);
    confirm_query($subject_set);
    ?>
    <?php
    while($subject = mysqli_fetch_assoc($subject_set)) {
        ?>
        <li>
            <?php echo $subject["menu_name"]; ?>
            <?php
            $query  = "SELECT * ";
            $query .= "FROM pages ";
            $query .= "WHERE visible = 1 ";
            $query .= "AND subject_id = {$subject["id"]} ";
            $query .= "ORDER BY position ASC";
            $page_set = mysqli_query($connection, $query);
            confirm_query($page_set);
            ?>
            <ul class="pages">
                <?php
                while($page = mysqli_fetch_assoc($page_set)) {
                    ?>
                    <li><?php echo $page["menu_name"]; ?></li>
                    <?php
                }
                ?>
                <?php mysqli_free_result($page_set); ?>
            </ul>
        </li>
        <?php
    }
    ?>
    <?php mysqli_free_result($subject_set); ?>
</ul>
