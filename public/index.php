<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>
<script
    src="https://code.jquery.com/jquery-2.2.4.js"
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
<div id="main">

  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?> <br />

  </div>
  <div id="page">

		<?php if ($current_page) { //print_r($current_page); ?>

			<h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
			<?php
			 $images = $current_page['images'];
            //var_dump($images);
			 $images = explode(',', $images);
			 print_r($images);

            foreach($images as  $image) {
                echo '<img src="http://visitportlethen.azurewebsites.net/public/images/'. $image . '">';
            }

			 ?>
            <div id="calendar"></div>



			<?php echo nl2br(htmlentities($current_page["content"])); ?>



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
