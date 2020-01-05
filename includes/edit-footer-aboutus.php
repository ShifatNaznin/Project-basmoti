<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sel="SELECT * FROM footer_aboutus WHERE footer_aboutus_id='$id'";
$Q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($Q);

if(!empty($_POST)){

  $details=$_POST['details'];
  $map=$_POST['map'];


    $update="UPDATE footer_aboutus SET footer_aboutus_details='$details', footer_aboutus_map='$map' WHERE footer_aboutus_id='$id'";

  if(mysqli_query($con,$update)){


       header('Location:view-footer-aboutus.php?v='.$id);

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
          Update Footer About Us
        </div>
        <div class="col-md-3 text-right">
          <a href="allfooter-aboutus.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Footer About Us</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Details</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="details" value="<?= $data['footer_aboutus_details'];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Map</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="map" value="<?= $data['footer_aboutus_map'];?>">
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
