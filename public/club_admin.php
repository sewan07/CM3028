<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>

<div id="main">
    <div id="navigation">
        &nbsp;
    </div>
    <div id="page">
        <h2>Club Admin Menu</h2>
        <p>Welcome to the club admin area, <?php echo htmlentities($_SESSION["username"]); ?>.</p>
        <ul>
            <li><a href="manage_club_page.php">Sportlethen Sports</a></li>
            <li><a href="huntly.php">Huntly Sports Hub</a></li>

        </ul>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
