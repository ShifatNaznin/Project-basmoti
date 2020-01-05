<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $mname=$_POST['mname'];
          $details=$_POST['details'];
          $price=$_POST['price'];
          $image=$_FILES['pic'];
          $imageName="banner_".time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

         $insert="INSERT INTO menu_all_item(menu_all_item_name,	menu_all_item_details,menu_all_item_price,	menu_all_item_photo) VALUES('$mname','$details','$price','$imageName')";
         if(mysqli_query($con,$insert)){
           move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
           echo "Menu All Item Uploaded";
         }
         else{
           echo "Menu All Item Upload failed!";
         }

    }

?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                  Add Menu All Item
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="allmenu-all-item.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i>All Item Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">All Item Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mname">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">All Item Details</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="details">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">All Item Price</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="price">
                </div>
              </div>


              <div class="form-group">
                <label for="" class="col-sm-3 control-label">All Item Image </label>
                <div class="col-sm-8">
                  <input type="file" name="pic" onchange="readURL(this);" >
                  <img id="upload_image" width="100" src="images/avatar.png" alt="your image" />
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
