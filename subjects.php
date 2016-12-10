<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<?php
$stock_sql="SELECT menu_name,content FROM pages JOIN subjects ON pages.subject_id=subjects.id WHERE pages.subject_id=1";




