<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM home_dishes_title WHERE home_dishes_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allhome-dishes-title.php');
    }
?>
