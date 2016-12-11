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
</head>

<div id="header">
	<a href="index.php">  <h1>Go Portlethen <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1> </a>
</div>
<div id="log">
	<a href="choose_admin.php"> Log In </a> </div>
</div>

