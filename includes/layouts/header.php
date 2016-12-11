<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Go Portlethen <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
		<script
			src="https://code.jquery.com/jquery-2.2.4.js"
			integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
			crossorigin="anonymous"></script>

		<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>


		<script type="text/javascript">
			$(document).ready(function() {

				// page is now ready, initialize the calendar...

				$('#calendar').fullCalendar({
					// put your options and callbacks here
				})

			});
			</script>

			</head>
	<body>
    <div id="header">
		<a href="index.php">  <h1>Go Portlethen <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1> </a>
    </div>
<div id="log">
	   <a href = "choose_administrator.php">LOG IN </a>
</div>