<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_people_title WHERE about_people_title_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-people-title.php');
    }
?>
