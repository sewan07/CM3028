<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php $layout_context = "admin"; ?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
    <div id="navigation">
        &nbsp;
    </div>
    <div id="page">
        <h2>Club Admin Menu</h2>
        <p>Welcome to the club admin area, <?php echo htmlentities($_SESSION["username"]); ?>.</p>
        <ul>
            <li><a href="manage_club.php">Manage Club</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
