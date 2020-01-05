<?php
require_once('functions/function.php');
get_headertwo();
 ?>
 <?php

 $sel="SELECT * FROM blog_banner ORDER BY blog_ban_id DESC LIMIT 0,1";
 $Q=mysqli_query($con,$sel);
 while ($data=mysqli_fetch_assoc($Q)) {
   ?>
        <div class="breadcrumb-area bg-img ptb-80" style="background-image: url(admin/uploads/<?= $data['blog_ban_photo'];  ?>);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3><?= $data['blog_ban_title']; ?></h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">blog </li>
                    </ul>
                </div>
            </div>
        </div>
      <?php } ?>
        <div class="blog-area pt-100">
            <div class="container">
                <div class="row">
                  <?php

                  $sel="SELECT * FROM blog_all_item ORDER BY blog_all_item_id DESC LIMIT 0,9";
                  $Q=mysqli_query($con,$sel);
                  while ($data=mysqli_fetch_assoc($Q)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img height="270" width="370" src="admin/uploads/<?= $data['blog_all_item_photo'];?>" alt="photo">
                                </a>
                                <span class="blogpost-time-date">
                                    <span class="date"><?= $data['blog_all_item_date'];?></span>
                                    <span class="month"><?= $data['blog_all_item_month'];?></span>
                                </span>
                            </div>
                            <div class="blogpost-desc">
                                <h3>
                                    <a href="blog-details.php"><?= $data['blog_all_item_name'];?></a>
                                </h3>
                                <p><?= $data['blog_all_item_details'];?></p>
                                <a class="readmore" href="blog-details.php">Read more</a>
                            </div>
                        </div>

                    </div>
<?php } ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pagination-total-pages mt-30">
                            <div class="pagination-style">
                                <ul>
                                    <li><a class="prev-next prev" href="#"><i class="ion-ios-arrow-left"></i> Prev</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a class="prev-next next" href="#">Next<i class="ion-ios-arrow-right"></i> </a></li>
                                </ul>
                            </div>
                            <div class="total-pages">
                                <p>Showing 1 - 20 of 30 results  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
