

<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">

  <div id="navigation">
      <!-- calling public_navigation function for subject menu from the functions.php file -->
		<?php echo public_navigation($current_subject, $current_page); ?> <br />

  </div>
  <div id="page">

		<?php if ($current_page) { //print_r($current_page); ?>
            <!-- displaying the subject name and the content in the page section -->
			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>

			<?php echo nl2br(htmlentities($current_page["content"])); ?>

            <?php echo nl2br(htmlentities($current_page["filename"])); ?>

		<?php } else { ?>

            <div id="title">
                <h1><strong>Hello everyones !</strong></h1>
                <h1> We are an association of local and progressive sports clubs </h1>
                <h1> Who are working together to develop safe and fun sports and .</h1>
                <h1> fitness activities in the Porthlethen area.</h1>


            <div id="explore">
                <a href="portfolio.html"> <img src="images/explore.png" alt="explore" width="250" title="explore" /> </a>
            </div>
			
		<?php }?>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        // page is now ready, initialize the calendar...

        $('#calendar').fullCalendar({
            // put your options and callbacks here
        })

    });
</script>
<?php include("../includes/layouts/footer.php"); ?>
