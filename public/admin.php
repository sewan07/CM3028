<?php require_once("../includes/db_connection.php"); ?>

<?php require_once("../includes/functions.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
<head>
  <title> Portlethen </title>

</head>
<body>
<div id="header">
  <h1>Go Portlethen</h1>
</div>

  <div id="navigation">
    <nav>
      <a href="manage_content" class="navHome">Manage Website Content</a>
      <a href="manage_admins" class="navAbout">Manage Admin Users</a>
      <a href="logout.php" class="navPort">Logout</a>
    </nav>
  </div>
  </div>
</body>

<?php include("../includes/layouts/footer.php"); ?>
