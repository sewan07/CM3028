<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

	<div id="main">
		<div id="navigation">
			<ul class="subjects">
				<?php

				?>
				<?php
				while($subject = mysqli_fetch_assoc($subject_set)) {
					?>
					<li>
						<?php echo $subject["menu_name"]; ?>
						<?php
						$query  = "SELECT * ";
						$query .= "FROM pages ";
						$query .= "WHERE visible = 1 ";
						$query .= "AND subject_id = {$subject["id"]} ";
						$query .= "ORDER BY position ASC";
						$page_set = mysqli_query($connection, $query);
						confirm_query($page_set);
						?>
						<ul class="pages">
							<?php
							while($page = mysqli_fetch_assoc($page_set)) {
								?>
								<li><?php echo $page["menu_name"]; ?></li>
								<?php
							}
							?>
							<?php mysqli_free_result($page_set); ?>
						</ul>
					</li>
					<?php
				}
				?>
				<?php mysqli_free_result($subject_set); ?>
			</ul>
		</div>
		<div id="page">
			<h2>Manage Content</h2>
            <?php $link_name = "test page";?>
            <a href="admin.php"><?php echo $link_name; ?> </a>

		</div>
	</div>

<?php include("../includes/layouts/footer.php"); ?>