

<?php require_once("../includes/db_connection.php"); ?>
<?php
// 2. Perform database query
$query  = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$query .= "ORDER BY position ASC";
$result = mysqli_query($connection, $query);
// Test if there was a query error
if (!$result) {
    die("Database query failed.");
}
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

    <html lang="en">
    <head>
        <title>Databases</title>
    </head>
    <body>

    <ul>
        <?php
        // 3. Use returned data (if any)
        while($subject = mysqli_fetch_assoc($result)) {
            // output data from each row
            ?>
            <li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
            <?php
        }
        ?>
    </ul>

    <?php
    // 4. Release returned data
    mysqli_free_result($result);
    ?>
    </body>
    </html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>