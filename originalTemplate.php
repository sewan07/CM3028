<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

?>
<html>
<head>
<title>Welcome to Chic Clothing</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<div class="header">
    	<div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->
		<div class="navigation">
		<p>Links go here
        <a href="admin.php">Admin</a>
        </p>
      </div><!--navigation ends-->
	</div><!-- Header ends here-->
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Lorem ipsum goes here</p>
  </div>
    <?php
    include("seccontent.php");
    ?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
