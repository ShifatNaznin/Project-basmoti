<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM menu_breakfast_item WHERE menu_breakfast_item_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allmenu-breakfast-item.php');
    }
?>
