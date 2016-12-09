<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/validation_functions.php"); ?>
<?php confirm_logged_in(); ?>


<div id="main">
    <div id="navigation">
        <ul class="subjects">
            <?php
            $query  = "SELECT * ";
            $query .= "FROM subjects ";
            $query .= "WHERE visible = 1 ";
            $query .= "AND id = 2 ";
            $query .= "ORDER BY position ASC";
            $sport_set = mysqli_query($connection, $query);
            confirm_query($sport_set);
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
                    $query .= "AND id = 1 ";
                    $query .= "ORDER BY position ASC";
                    $sport_page_set = mysqli_query($connection, $query);
                    confirm_query($sport_page_set);
                    ?>
                    <ul class="pages">
                        <?php
                        while($page = mysqli_fetch_assoc($sport_page_set)) {
                            ?>
                            <a href="edit_club_page.php"> <li><?php echo $page["menu_name"]; ?></li> </a>
                            <?php
                        }
                        ?>
                        <?php mysqli_free_result($sport_page_set); ?>
                    </ul>
                </li>
                <?php
            }
            ?>
            <?php mysqli_free_result($sport_set); ?>
        </ul>
    </div>
    <div id="page">
        <h2>Manage Contents</h2>

    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
    <div id="navigation">
        <?php echo navigation($current_subject, $current_page); ?>
    </div>
    <div id="page">
        <?php echo message(); ?>
        <?php echo form_errors($errors); ?>

        <h2>Edit Page: <?php echo htmlentities($current_page["menu_name"]); ?></h2>
        <form action="edit_page.php?page=<?php echo urlencode($current_page["id"]); ?>" method="post">
            <p>Menu name:
                <input type="text" name="menu_name" value="<?php echo htmlentities($current_page["menu_name"]); ?>" />
            </p>
            <p>Position:
                <select name="position">
                    <?php
                    $sport_page_set = find_pages_for_subject($current_page["subject_id"], false);
                    $page_count = mysqli_num_rows($page_set);
                    for($count=1; $count <= $page_count; $count++) {
                        echo "<option value=\"{$count}\"";
                        if ($current_page["position"] == $count) {
                            echo " selected";
                        }
                        echo ">{$count}</option>";
                    }
                    ?>
                </select>
            </p>
            <p>Visible:
                <input type="radio" name="visible" value="0" <?php if ($current_page["visible"] == 0) { echo "checked"; } ?> /> No
                &nbsp;
                <input type="radio" name="visible" value="1" <?php if ($current_page["visible"] == 1) { echo "checked"; } ?>/> Yes
            </p>
            <p>Content:<br />
                <textarea name="content" rows="20" cols="80"><?php echo htmlentities($current_page["content"]); ?></textarea>
            </p>
            <input type="submit" name="submit" value="Edit Page" />
        </form>
        <br />
        <a href="manage_content.php?page=<?php echo urlencode($current_page["id"]); ?>">Cancel</a>
        &nbsp;
        &nbsp;
        <a href="delete_page.php?page=<?php echo urlencode($current_page["id"]); ?>" onclick="return confirm('Are you sure?');">Delete page</a>

    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
