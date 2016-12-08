<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
		<ul class="subjects">
			<?php
              $subject_set = find_all_subjects();
			?>
		<?php
			// 3. Use returned data (if any)
			while($subject = mysqli_fetch_assoc($subject_set)) {
				// output data from each row
		?>
				<li>
					<?php echo $subject["menu_name"]; ?>
					<?php
					// 2. Perform database query
					$page_set = find_pages_for_subject($subject["id"]);
					?>
					<ul class="pages">
						<?php
						// 3. Use returned data (if any)
						while($page = mysqli_fetch_assoc($page_set)) {
						// output data from each row
						?>
						<li>
							<?php echo $page["menu_name"]; ?> </li>
							<?php
						}
						?>
						<?php
						// 4. Release returned data
						mysqli_free_result($page_set);
						?>

					</ul>
				</li>
		<?php
			}
		?>

			<?php
			// 4. Release returned data
			mysqli_free_result($subject_set);
			?>
		</ul>
  </div>
  <div id="page">
    <h2>Manage Content</h2>

  </div>
</div>


<?php include("../includes/layouts/footer.php"); ?>
