<?php require_once("../includes/validation_functions.php"); ?>

<?php
$username = "";
if (isset($_POST['submit'])) {
    // Process the form

    // validations
    $required_fields = array("username", "password");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("username" => 30);
    validate_max_lengths($fields_with_max_lengths);

    if (empty($errors)) {
        // Perform Create
        $username = $_POST["username"];
        $password = $_POST["password"];
       $found_admin = attempt_login($username, $password);

        if ($found_admin) {
            // Success

            redirect_to("club_admin.php");
        } else {
            // Failure
            $_SESSION["message"] = "user not found.";
        }
    }
} else {
    // This is probably a GET request

} // end: if (isset($_POST['submit']))

?>


<?php include("../includes/layouts/header.php"); ?>
<div id="main">
    <div id="navigation">
        &nbsp;
    </div>
    <div id="page">
        <?php echo message(); ?>
        <?php echo form_errors($errors); ?>

        <h2>Club Login</h2>
        <form action="new_admin_sportlethen.php" method="post">
            <p>Username:
                <input type="text" name="username" value="" />
            </p>
            <p>Password:
                <input type="password" name="password" value="" />
            </p>
            <input type="submit" name="submit" value="Submit" />
        </form>
        <br />

    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
