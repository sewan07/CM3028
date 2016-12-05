<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/fucntions.php"); ?>




	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

	<html lang="en">
	<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	<head>
		<title> Portlethen </title>

	</head>
	<nav>
		<?php
		// 2. Perform database query
		$query  = "SELECT * ";
		$query .= "FROM subjects ";
		$query .= "WHERE visible = 1 ";
		$query .= "ORDER BY position ASC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);

		?>

		<?php
		// 3. Use returned data (if any)
		while($subject = mysqli_fetch_assoc($subject_set)) {
			// output data from each row
			?>
			<?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?>
			<?php
			// 2. Perform database query
			$query  = "SELECT * ";
			$query .= "FROM pages ";
			$query .= "WHERE visible = 1 ";
			$query .= "AND subject_id = {$subject["id"]} ";
			$query .= "ORDER BY position ASC";
			$page_set = mysqli_query($connection, $query);
			// Test if there was a query error
			confirm_query($page_set);
			?>

			<?php
			// 3. Use returned data (if any)
			while($page = mysqli_fetch_assoc($page_set)) {
				// output data from each row
				?>
				<?php echo $page["menu_name"]; ?>

			<?php
		}
		?>
			<?php
			// 4. Release returned data
			mysqli_free_result($page_set);
			?>
		<?php
		// 4. Release returned data
		mysqli_free_result($subject_set);
		?>

	</nav>

	<footer>Copyright 2015 by Sewan Ale. Made with 100% recycled pixels.</footer>
	</body>
	<body>
	</html>

<?php
// 5. Close database connection
mysqli_close($connection);
?>