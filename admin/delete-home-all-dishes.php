<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM home_all_dishes WHERE home_all_dishes_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allhome-all-dishes.php');
    }
?>
