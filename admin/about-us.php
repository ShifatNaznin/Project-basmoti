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
                    All About Us Information
                 </div>
                 <div class="col-md-3 text-right">
                <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-square fa-lg"></i> Update About Us</a>
              </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                     <th>About Us Feature</th>
                	</thead>
                    <tbody>

                    	<tr>
                        	<td>About Us Banner
                            <div class="table_btn" >

                          	<a href="add-about-banner.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add About Banner</a>
                           	<a href="all-about-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Banner</a>
                              </div>
                          </td>
                        </tr>

                        <tr>
                        	<td>About Details
                            <div class="table_btn" >

                          	<a href="add-about-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add About Details</a>
                           	<a href="all-about-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Details</a>
                              </div>
                            </td>
                            </tr>
                        <tr>
                          <td>About Team Title/Subtitle
                            <div class="table_btn" >

                            <a href="addabout-team-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Team Title/Subtitle</a>
                            <a href="allabout-team-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Team Title/Subtitle</a>
                              </div>
                          </td>
                        </tr>
                        	<tr>
                            <td>About Team Details
                              <div class="table_btn" >
                              <a href="addabout-team-details.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add Team Details</a>
                              <a href="allabout-team-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Team Details</a>
                                </div>
                            </td>
                          </tr>
                        	<tr>
                            	<td>About Service Title/Subtitle
                                <div class="table_btn" >

                                <a href="addabout-service-title.php" class="btn btn-sm btn btn-primary" float="right">
                                       <i class="fa fa-plus-circle"></i> Add Service Title/Subtitle</a>
                                <a href="allabout-service-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service Title/Subtitle</a>
                                  </div>
                              </td>
                          </tr>
                        <tr>
                          	<td>About Service Details
                              <div class="table_btn" >
                              <a href="addabout-service-details.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add Service Details</a>
                              <a href="allabout-service-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Service Details</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>About People Title/Subtitle
                              <div class="table_btn" >

                              <a href="addabout-people-title.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add People Title/Subtitle</a>
                              <a href="allabout-people-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All People Title/Subtitle</a>
                                </div>
                            </td>
                        </tr>
                      <tr>
                          <td>About People Say Details
                            <div class="table_btn" >
                            <a href="addabout-people-say-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add People Say Details</a>
                            <a href="allabout-people-say-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All People Say Details</a>
                              </div>
                          </td>
                      </tr>

                      <tr>
                          <td>About People Details
                            <div class="table_btn" >

                            <a href="addabout-people-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add People Details</a>
                            <a href="allabout-people-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All People Details</a>
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
