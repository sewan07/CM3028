<?php
$club_sql="SELECT menu_name,content FROM pages JOIN subjects ON pages.subject_id=subjects.id WHERE pages.subject_id=2";
echo $club_sql;
if($stock_query=mysqli_query($dbconnect,$club_sql)){
    $stock_rs=mysqli_fetch_assoc($stock_query);
}
?>