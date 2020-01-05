    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM blog_banner WHERE blog_ban_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){
      $title=$_POST['title'];

      $photo=$_FILES['photo'];
      $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

        $update="UPDATE blog_banner SET blog_ban_title='$title', 	blog_ban_photo='$photoName' WHERE blog_ban_id='$id'";

      if(mysqli_query($con,$update)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
           header('Location:view-blog-banner.php?v='.$id);
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
              Update Blog banner Information
            </div>
            <div class="col-md-3 text-right">
              <a href="allblog-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Blog banner</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Title</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="title" value="<?= $data['blog_ban_title'];?>" >
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Photo</label>
              <div class="col-sm-8">
                <?php
                if(!empty($data['blog_ban_photo'])){
                  ?>
                  <img id="upload_image" height="50" width="50" src="uploads/<?= $data['blog_ban_photo'];?>" alt="photo"/>
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
