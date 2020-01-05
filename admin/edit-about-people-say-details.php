<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sel="SELECT * FROM about_people_say_details WHERE about_people_say_details_id='$id'";
$Q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($Q);

if(!empty($_POST)){

  $details=$_POST['details'];
    $update="UPDATE about_people_say_details SET about_people_say_details='$details' WHERE about_people_say_details_id='$id'";

  if(mysqli_query($con,$update)){


       header('Location:view-about-people-say-details.php?v='.$id);

  }
  else {
    echo "Update failed!";
  }
}
?>
<div class="col-md-12">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="col-md-9 heading_title">
          Update About People Say Details
        </div>
        <div class="col-md-3 text-right">
          <a href="allabout-people-say-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All about People Say Details</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Details</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="details" value="<?= $data['about_people_say_details'];?>" >
          </div>
        </div>

  </div>
  <div class="panel-footer text-center">
    <button class="btn btn-sm btn-primary">UPDATE</button>
  </div>
</div>
</form>
</div><!--col-md-12 end-->
<?php
get_footer();
?>
