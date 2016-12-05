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
	<body>

	<?php
	// 3. Use returned data (if any)
	while($row = mysqli_fetch_row($result)) {
		// output data from each row
		var_dump($row);
		echo "<hr />";
	}
	?>
	<?php
	// 4. Release returned data
	mysqli_free_result($result);
	?>

	<footer>Copyright 2015 by Sewan Ale. Made with 100% recycled pixels.</footer>
	</body>

	</html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>