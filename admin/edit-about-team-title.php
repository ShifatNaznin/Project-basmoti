    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM about_team_title WHERE about_team_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){

      $title=$_POST['title'];
      $subtitle=$_POST['subtitle'];


        $update="UPDATE about_team_title SET about_team_title='$title', about_team_subtitle='$subtitle' WHERE about_team_id='$id'";

      if(mysqli_query($con,$update)){


           header('Location:view-about-team-title.php?v='.$id);

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
              Update About Team Information
            </div>
            <div class="col-md-3 text-right">
              <a href="allabout-advisors-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All about Team</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Title</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="title" value="<?= $data['about_team_title'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Subtitle</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="subtitle" value="<?= $data['about_team_subtitle'];?>">
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
