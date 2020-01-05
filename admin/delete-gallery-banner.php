<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM gallery_banner WHERE gallery_ban_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allgallery-banner.php');
    }
?>
