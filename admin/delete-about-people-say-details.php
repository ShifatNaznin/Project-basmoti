<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_people_say_details WHERE about_people_say_details_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-people-say-details.php');
    }
?>
