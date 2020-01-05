<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_service_title WHERE about_service_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-service-title.php');
    }
?>
