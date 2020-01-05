<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['v'];
    $sel="SELECT * FROM about_service_details WHERE about_service_details_id='$id'";
    $Q=mysqli_query($con,$sel);
    $info=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All About Service Details
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="allabout-service-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All About Service Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Title</td>
                        <td>:</td>
                        <td><?= $info['about_service_details_title']; ?></td>
                    </tr>
                    <tr>
                    	<td>Details</td>
                        <td>:</td>
                        <td><?= $info['about_service_details']; ?></td>
                    </tr>

                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
