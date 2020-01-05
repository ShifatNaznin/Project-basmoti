<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $del="DELETE FROM about_team_title WHERE about_team_id='$id'";
    if(mysqli_query($con,$del)){
        header('Location: allabout-team-title.php');
    }
?>
