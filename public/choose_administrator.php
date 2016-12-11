<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

    <div id="main">
        <div id="navigation">
            &nbsp;
        </div>
        <div id="page">
            <h2>Choose administration type</h2>
            <p>Welcome to admin area, <?php echo htmlentities($_SESSION["username"]); ?>.</p>
            <ul>
                <li><a href="admin.php">Site Administrator</a></li>
                <li><a href="club_admin.php">Club Administrator</a></li>
                <li><a href="contributer.php">Contributer</a></li>
                <li><a href="NKPAG.php">NKPAG</a></li>

            </ul>
        </div>
    </div>

<?php include("../includes/layouts/footer.php"); ?>