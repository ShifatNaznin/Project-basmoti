<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM gallery_all_item WHERE gallery_all_item_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allgallery-all-item.php');
    }
?>
