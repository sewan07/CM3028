<div class="header">
    	<div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->
		<div class="navigation">
		<?php 
			$cat_sql="SELECT * FROM subjects";
			$cat_query=mysqli_query($connection, $cat_sql);
			$cat_rs=mysqli_fetch_assoc($cat_query);
		?>
        <p><?php
			do { ?>
			<a href="category.php?id=<?php echo $cat_rs['id']; ?>"><?php echo $cat_rs['menu_name']; ?></a>
				
				<?php
			} while ($cat_rs=mysqli_fetch_assoc($cat_query))
		?>
        <a href="admin.php">Admin</a>
        </p>
      </div><!--navigation ends-->
	</div><!-- Header ends here-->