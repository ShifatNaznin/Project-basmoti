<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM menu_all_item WHERE menu_all_item_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allmenu-all-item.php');
    }
?>
