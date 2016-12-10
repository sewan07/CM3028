<?php require_once("db_connection.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Go Portlethen </title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div id="header">
		<a href="index.php">  <h1>Go Portlethen</h1> </a>
    </div>
	<div id="navigation">
		<p> <?php
include("categoryList.php");

?>
		<a href="admin.php">Admin</a>
		</p>
	</div>