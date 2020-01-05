<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM blog_banner WHERE blog_ban_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allblog-banner.php');
    }
?>
