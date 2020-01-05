<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sel="SELECT * FROM about_service_details WHERE about_service_details_id='$id'";
$Q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($Q);

if(!empty($_POST)){

  $title=$_POST['title'];
  $details=$_POST['details'];


    $update="UPDATE about_service_details SET about_service_details_title='$title', about_service_details='$details' WHERE about_service_details_id='$id'";

  if(mysqli_query($con,$update)){


       header('Location:view-about-service-details.php?v='.$id);

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
          Update About Service Details
        </div>
        <div class="col-md-3 text-right">
          <a href="allabout-service-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All about Service</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Title</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="title" value="<?= $data['about_service_details_title'];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Details</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="details" value="<?= $data['about_service_details'];?>">
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
