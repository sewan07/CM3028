
<?php require_once("db_connection.php"); ?>




<html>
<head>
    <title>Go Portlethen</title>

</head>

<body>
<div class="container">


    <?php
    include("header.php");
if(!isset($GET['page'])) {

?> <div class="banner"><img src="images/banner.jpg" ali="Portlethen" /></div>
    <?php
}


    ?>
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

