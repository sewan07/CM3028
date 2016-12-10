
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



