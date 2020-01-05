    <?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
      get_header();
      get_sidebar();

      if(!empty($_POST)){
        $details=$_POST['details'];
        $map=$_POST['map'];
        $insert="INSERT INTO footer_aboutus(footer_aboutus_details,footer_aboutus_map) VALUES('$details','$map')";
        if(mysqli_query($con,$insert)){

          echo "About Information Uploaded";
        }
        else{
          echo "About Information Upload failed!";
        }


      }

      ?>
      <div class="col-md-12">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="col-md-9 heading_title">
                Add Footer AboutUs
              </div>
              <div class="col-md-3 text-right">
                <a href="allfooter-aboutus.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Footer AboutUs</a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Details</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="details">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Map</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="map">
                </div>
              </div>

            </div>
            <div class="panel-footer text-center">
              <button class="btn btn-sm btn-primary">UPLOAD</button>
            </div>
          </div>
        </form>
      </div><!--col-md-12 end-->
      <?php
      get_footer();
    }else{
      echo "Invalid! You have no permission visit this page.";
    }
    ?>
