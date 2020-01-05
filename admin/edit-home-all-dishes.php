    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM home_all_dishes WHERE home_all_dishes_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){

      $mname=$_POST['mname'];
      $details=$_POST['details'];
      $price=$_POST['price'];
      $photo=$_FILES['photo'];
      $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

        $update="UPDATE home_all_dishes SET home_all_dishes_name='$mname', home_all_dishes_details='$details',home_all_dishes_price='$price', home_all_dishes_photo='$photoName' WHERE home_all_dishes_id='$id'";
      if(mysqli_query($con,$update)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);

           header('Location:view-home-all-dishes.php?v='.$id);

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
              Update Home All Dishes
            </div>
            <div class="col-md-3 text-right">
              <a href="allhome-all-dishes.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home All Dishes</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="mname" value="<?= $data['home_all_dishes_name'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Details</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="details" value="<?= $data['home_all_dishes_details'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="price" value="<?= $data['home_all_dishes_price'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Photo</label>
              <div class="col-sm-8">
                <?php
                if(!empty($data['home_all_dishes_photo'])){
                  ?>
                  <img id="upload_image" height="50" width="50" src="uploads/<?= $data['home_all_dishes_photo'];?>" alt="photo"/>
                  <?php
                }else{
                  ?>
                  <img height="50" src="images/avatar.png" alt="photo"/>
                <?php } ?>

                <input type="file" name="photo" onchange="readURL(this);" >



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
