<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM footer_logo WHERE footer_logo_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allfooter-logo.php');
    }
?>
