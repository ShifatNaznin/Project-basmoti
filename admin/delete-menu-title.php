<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM menu_details_title WHERE menu_details_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allmenu-title.php');
    }
?>
