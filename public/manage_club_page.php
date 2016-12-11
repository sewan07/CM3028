<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/function_club.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

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
                        <a href="manage_content.php?subject=<?php echo urlencode($subject["id"]); ?>"><?php echo $subject["menu_name"]; ?> </a>
                        <?php $page_set =  find_all_pages_for_subject($subject["id"]);?>
                        <ul class="pages">
                            <?php
                            while($page = mysqli_fetch_assoc($page_set)) {
                                ?>
                                <li>
                                    <a href="manage_content.php?page=<?php echo urlencode($page["id"]); ?>"> <?php echo $page["menu_name"]; ?> </a>
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

        </div>
    </div>

<?php include("../includes/layouts/footer.php"); ?>