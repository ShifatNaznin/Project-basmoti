<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All gallery All Item
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="addgallery-all-item.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add gallery All Item</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                		<tr>
                            <th>Photo</th>
                            <th>Manage</th>
                        </tr>
                	</thead>
                    <tbody>
                        <?php
                            $sel="SELECT * FROM gallery_all_item  ORDER BY gallery_all_item_id DESC";
                            $Q=mysqli_query($con,$sel);
                            while($data=mysqli_fetch_assoc($Q)){
                        ?>
                    	<tr>
    
                            <td class="hidden-xs">
                                <?php
                                    if(!empty($data['gallery_all_item_photo'])){
                                ?>
                                <img height="50" src="uploads/<?=$data['gallery_all_item_photo'];?>" alt="photo"/>
                                <?php
                                  }else{
                                ?>
                                <img height="50" src="images/avatar.png" alt="photo"/>
                                <?php } ?>
                            </td>

                            <td>
                            	  <a href="view-gallery-all-item.php?v=<?= $data['gallery_all_item_id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                <a href="edit-gallery-all-item.php?e=<?= $data['gallery_all_item_id']; ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                <a href="delete-gallery-all-item.php?d=<?= $data['gallery_all_item_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
