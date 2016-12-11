<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function_club.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php
if (isset($_GET["subject"])) {
    $selected_subject_id = $_GET["subject"];
    $selected_page_id = null;
} elseif (isset($_GET["page"])) {
    $selected_subject_id = null;
    $selected_page_id = $_GET["page"];
} else {
    $selected_subject_id = null;
    $selected_page_id = null;
}

?>
    <div id="main">
        <div id="navigation">
            <ul class="subjects">
                <?php
                $subject_set = find_all_subjects() ?>
                ?>
                <?php
                while($subject = mysqli_fetch_assoc($subject_set)) {
                    ?>
                    <li>
                        <a href="manage_club_page.php?subject=<?php echo urlencode($subject["id"]); ?>"><?php echo $subject["menu_name"]; ?> </a>
                        <?php $page_set =  find_all_pages_for_subject($subject["id"]);?>
                        <ul class="pages">
                            <?php
                            while($page = mysqli_fetch_assoc($page_set)) {
                                ?>
                                <li>
                                    <a href="manage_club_page.php?page=<?php echo urlencode($page["id"]); ?>"> <?php echo $page["menu_name"]; ?> </a>
                                </li>
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
        </div>
        <div id="page">
            <h2>Manage Content</h2>
            <?php if ($selected_subject_id) { ?>
                <h2>Manage Subject</h2>
                <?php $current_subject = find_subject_by_id($selected_subject_id); ?>
                Menu name: <?php echo $current_subject["menu_name"]; ?><br />

            <?php } elseif ($selected_page_id) { ?>
                <h2>Manage Page</h2>
                <?php $current_page = find_page_by_id($selected_page_id); ?>
                Menu name: <?php echo $current_page["menu_name"]; ?><br />

            <?php } else { ?>
                Please select a page.
            <?php }?>
        </div>
    </div>

<?php include("../includes/layouts/footer.php"); ?>