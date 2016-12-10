
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

        <?php
        if(!isset($GET['page'])) {
            include("home.php");
        } else {
            $page=$_GET['page'];
            include("$page.php");
        }
        ?>



    </div>
    <?php
    include("seccontent.php");
    ?>

    <div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>

