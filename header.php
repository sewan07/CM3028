<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<div class="header">
    	<div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->
		<div class="navigation">
            <p><?php
                  include("categoryList.php");
		?>
        <a href="admin.php">Admin</a>
        </p>
      </div><!--navigation ends-->
	</div><!-- Header ends here-->