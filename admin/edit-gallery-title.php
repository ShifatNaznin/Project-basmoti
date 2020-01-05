<?php
require_once('functions/function.php');
get_header();
get_sidebar();

$id=$_GET['e'];
$sel="SELECT * FROM gallery_details_title WHERE gallery_details_title_id='$id'";
$Q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($Q);

if(!empty($_POST)){

  $title=$_POST['title'];
  $subtitle=$_POST['subtitle'];


    $update="UPDATE gallery_details_title SET gallery_details_title='$title', gallery_details_subtitle='$subtitle' WHERE gallery_details_title_id='$id'";

  if(mysqli_query($con,$update)){


       header('Location:view-gallery-title.php?v='.$id);

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
          Update Gallery People Information
        </div>
        <div class="col-md-3 text-right">
          <a href="allgallery-people-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery People</a>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Title</label>
          <div class="col-sm-8">

            <input type="text" class="form-control" name="title" value="<?= $data['gallery_details_title'];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="" class="col-sm-3 control-label">Subtitle</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="subtitle" value="<?= $data['gallery_details_subtitle'];?>">
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
