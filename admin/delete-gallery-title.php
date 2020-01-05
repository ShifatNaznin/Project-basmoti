<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM gallery_details_title WHERE gallery_details_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allgallery-title.php');
    }
?>
