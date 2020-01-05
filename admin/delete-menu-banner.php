<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM menu_banner WHERE menu_ban_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allmenu-banner.php');
    }
?>
