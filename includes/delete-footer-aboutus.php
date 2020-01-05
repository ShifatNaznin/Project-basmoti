<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM footer_aboutus WHERE footer_aboutus_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allfooter-aboutus.php');
    }
?>
