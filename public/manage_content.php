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
	<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	<head>
		<title> Portlethen </title>

	</head>
	<nav>

		<?php
		// 3. Use returned data (if any)
		while($subject = mysqli_fetch_assoc($result)) {
			// output data from each row
			?>
			<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
			<?php
		}
		?>


	</nav>

	<?php
	// 4. Release returned data
	mysqli_free_result($result);
	?>

	<footer>Copyright 2015 by Sewan Ale. Made with 100% recycled pixels.</footer>
	</body>
	<body>
	</html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>