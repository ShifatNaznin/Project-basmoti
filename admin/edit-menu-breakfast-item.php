    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM menu_breakfast_item WHERE menu_breakfast_item_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){

      $mname=$_POST['mname'];
      $details=$_POST['details'];
      $price=$_POST['price'];
      $photo=$_FILES['photo'];
      $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

        $update="UPDATE menu_breakfast_item SET menu_breakfast_item_name='$mname', menu_breakfast_item_details='$details',menu_breakfast_item_price='$price', menu_breakfast_item_photo='$photoName' WHERE menu_breakfast_item_id='$id'";
      if(mysqli_query($con,$update)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);

           header('Location:view-menu-breakfast-item.php?v='.$id);

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
              Update Menu breakfast Item
            </div>
            <div class="col-md-3 text-right">
              <a href="allmenu-breakfast-item.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Menu breakfast Item</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="mname" value="<?= $data['menu_breakfast_item_name'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Details</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="details" value="<?= $data['menu_breakfast_item_details'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Price</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="price" value="<?= $data['menu_breakfast_item_price'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Photo</label>
              <div class="col-sm-8">
                <?php
                if(!empty($data['menu_breakfast_item_photo'])){
                  ?>
                  <img id="upload_image" height="50" width="50" src="uploads/<?= $data['menu_breakfast_item_photo'];?>" alt="photo"/>
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
