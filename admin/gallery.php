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
        All Gallery Information
      </div>
      <div class="col-md-3 text-right">
        <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-square fa-lg"></i> Update Gallery</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="panel-body">
      <table class="table table-responsive table-striped table-hover table_cus">
        <thead class="table_head">
          <th>Gallery Feature</th>
        </thead>
        <tbody>

          <tr>
            <td>Gallery Banner
              <div class="table_btn" >

                <a href="addgallery-banner.php" class="btn btn-sm btn btn-primary" float="right">
                  <i class="fa fa-plus-circle"></i> Add Gallery Banner</a>
                  <a href="allgallery-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery Banner</a>
                </div>
              </td>
            </tr>

            <tr>
              <td>Gallery Title And Subtitle
                <div class="table_btn" >

                  <a href="addgallery-title.php" class="btn btn-sm btn btn-primary" float="right">
                    <i class="fa fa-plus-circle"></i> Add Gallery Title And Subtitle</a>
                    <a href="allgallery-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery Title And Subtitle</a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Gallery All Item
                  <div class="table_btn" >

                    <a href="addgallery-all-item.php" class="btn btn-sm btn btn-primary" float="right">
                      <i class="fa fa-plus-circle"></i> Add Gallery All Item</a>
                      <a href="allgallery-all-item.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery All Item</a>
                    </div>
                  </td>
                </tr>
              <tr>
                <td>Gallery Breakfast Item
                  <div class="table_btn" >

                    <a href="addmenu-breakfast-item.php" class="btn btn-sm btn btn-primary" float="right">
                      <i class="fa fa-plus-circle"></i> Add Gallery Breakfast Item</a>
                      <a href="allmenu-breakfast-item.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery Breakfast Item</a>
                    </div>
                  </td>
                </tr>




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
