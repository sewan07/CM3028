

<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">

  <div id="navigation"> <!-- calling public_navigation function for subject menu and pages menu item from the functions.php file -->

		<?php echo public_navigation($current_subject, $current_page); ?> <br />

  </div>  <!-- closing of the navigation div tag-->
  <div id="page">

		<?php if ($current_page) { //print_r($current_page); ?>
            <!-- displaying the subject name in the page section for the current selected page -->
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
            <!-- displaying the description of the page in the page section  for the current selected page-->
			<?php echo nl2br(htmlentities($current_page["content"])); ?>
            <!-- displaying the photo in the page section  for the current selected page-->
            <?php echo nl2br(htmlentities($current_page["filename"])); ?>

		<?php } else { ?>
      <!-- Display this page in the home page (if the user did not select any page or subject this page will display in the main section-->

            <div id="title">
                <h1><strong>Hello everyones !</strong></h1>
                <h1> We are an association of local and progressive sports clubs </h1>
                <h1> Who are working together to develop safe and fun sports and .</h1>
                <h1> fitness activities in the Porthlethen area.</h1>

                <!-- displaying the description of the page in the page section  for the current selected page-->
            <div id="explore">
                <a href="portfolio.html"> <img src="images/explore.png" alt="explore" width="250" title="explore" /> </a>
            </div>

		<?php }?>

  </div> <!-- closing of the page div tag-->

</div> <!-- closing of the main div tag-->

<?php include("../includes/layouts/footer.php"); ?> <!-- including the footer file-->
