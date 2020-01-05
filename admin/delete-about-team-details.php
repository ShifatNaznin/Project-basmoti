<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_team_details WHERE about_team_details_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-team-details.php');
    }
?>
