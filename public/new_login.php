<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
    <div id="navigation">
        <br />
        <a href="admin.php">&laquo; Main menu</a><br />

        <?php echo navigation($current_subject, $current_page); ?>
        <br />
        <a href="new_subject.php">+ Add a subject</a>
    </div>
    <div id="page">
        <h2>Login</h2>
        <form action="create_login.php" method="post">
            <p>Username:
                <input type="text" name="username" value="<?php echo htmlentities($username); ?>" />
            </p>
            <p>Password:
                <input type="password" name="password" value="" />
            </p>
            <input type="submit" name="submit" value="Submit" />
        </form>


       </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
