<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM blog_all_item WHERE blog_all_item_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allblog-all-item.php');
    }
?>
