    <?php
    require_once('functions/function.php');
    get_header();
    ?>
    <div class="slider-area">
      <div class="slider-active owl-dot-style owl-carousel">
        <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center" style="background-image:url(assets/img/slider/slider-1.jpg);">
          <div class="slider-content pt-100">
            <div class="slider-content-wrap slider-animated-1">
              <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
              <h1 class="animated"><span>Hot & spicy</span> food for you</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum. lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
              <div class="slider-btn mt-20">
                <a class="animated" href="product-details.html">read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="single-slider bg-img height-100vh d-flex align-items-center justify-content-center" style="background-image:url(assets/img/slider/slider-2.jpg);">
          <div class="slider-content pt-100">
            <div class="slider-content-wrap slider-animated-1">
              <h2 class="animated">Welcome to <span>Basmoti</span> Restaurant</h2>
              <h1 class="animated"><span>Basmoti</span> knows your taste</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis,eu condimentum. lorem ipsum dolor. lorem ipsum dolor sit amt.</p>
              <div class="slider-btn mt-20">
                <a class="animated" href="product-details.html">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-area ptb-95">
      <div class="container">
        <?php

        $sel="SELECT * FROM about_details ORDER BY about_det_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($about=mysqli_fetch_assoc($Q)) {
          ?>
          <div class="row d-flex align-items-center">
            <div class="col-lg-6">
              <div class="about-content pr-30">
                <h2><?= $about['about_det_title'] ?></h2>
                <h3><?= $about['about_det_subtitle'] ?></h3>
                <div class="about-peragraph">
                  <p><?= $about['about_det_one'] ?></p>
                  <p><?= $about['about_det_two'] ?></p>
                  <div class="default-btn-style mt-35">
                    <a href="#">read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-img">
                <img height="499" width="654" src="admin/uploads/<?= $about['about_det_photo'];  ?>" alt="photo">
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="popular-product gray-bg pt-100 pb-100">
      <div class="container">
        <?php

        $sel="SELECT * FROM home_dishes_title ORDER BY home_dishes_title_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {
          ?>
        <div class="section-title text-center mb-50">
          <h2><?= $data['home_dishes_title'] ?></h2>
          <p><?= $data['home_dishes_subtitle'] ?></p>
        </div>
      <?php } ?>
        <div class="product-slider-active owl-carousel">
          <?php

          $sel="SELECT * FROM home_all_dishes ORDER BY home_all_dishes_id DESC LIMIT 0,3";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {
            ?>
          <div class="product-style-wrap">
            <img height="200" width="300" src="admin/uploads/<?= $data['home_all_dishes_photo'];  ?>" alt="photo">
            <div class="product-content text-center">
              <h4>
                <?= $data['home_all_dishes_name'] ?>
              </h4>
              <p><?= $data['home_all_dishes_details'] ?></p>
              <span><?= $data['home_all_dishes_price'] ?></span>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>
      <div class="popular-bg-img">
        <img alt="" src="assets/img/banner/popular.png">
      </div>
    </div>
    <div class="gallery-area pt-100 pb-70">
      <div class="container">
        <?php

        $sel="SELECT * FROM gallery_details_title ORDER BY gallery_details_title_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {
          ?>
          <div class="section-title text-center mb-50">
            <div class="section-title text-center mb-50">
              <h2><?= $data['gallery_details_title']; ?></h2>
              <p><?= $data['gallery_details_subtitle']; ?></p>
            </div>
            </div>
          <?php } ?>
          <div class="gallery-menu-wrap text-center">
            <div class="gallery-menu portfolio-left-menu mb-50">
              <button class="active" data-filter="*">ALL</button>
              <button data-filter=".cat1">desert </button>
              <button data-filter=".cat2">coffee</button>
              <button data-filter=".cat3">burger </button>
            </div>
          </div>
          <div class="row portfolio-style-2 grid">
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 1,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l1.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 2,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l2.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 3,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l3.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 4,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l4.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 5,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l5.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 6,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l6.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 7,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l7.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 8,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l8.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <?php
              $sel="SELECT * FROM gallery_all_item ORDER BY gallery_all_item_id DESC LIMIT 9,1";
              $Q=mysqli_query($con,$sel);
              while ($data=mysqli_fetch_assoc($Q)) {
                ?>
                <div class="gallery hover-style mb-30">
                  <div class="gallery-img">
                    <img src="admin/uploads/<?= $data['gallery_all_item_photo'];  ?>" alt="photo">
                    <div class="gallery-view">
                      <a class="img-popup" href="assets/img/gallery/l9.jpg">
                        <span class="plus"></span>
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="product-menu-area pt-100 pb-70 gray-bg">
        <div class="container">
          <?php

          $sel="SELECT * FROM menu_details_title ORDER BY menu_details_title_id DESC LIMIT 0,1";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {
            ?>
            <div class="section-title text-center mb-50">
              <h2><?= $data['menu_details_title']; ?></h2>
              <p> <?= $data['menu_details_subtitle']; ?></p>
            </div>
          <?php } ?>

          <div class="menu-tab-wrap mb-50">
            <div class="menu-tab-list nav text-center">
                <a class="active" href="#tab1" data-toggle="tab">
                    All item
                </a>
                <a href="#tab2" data-toggle="tab">
                    breakfast
                </a>
                <a href="#tab3" data-toggle="tab">
                    lunch
                </a>
                <a href="#tab4" data-toggle="tab">
                    dinner
                </a>
                <a href="#tab5" data-toggle="tab">
                    party
                </a>
                <a href="#tab6" data-toggle="tab">
                    coffee
                </a>
            </div>
          </div>

          <div class="tab-content jump">
            <div id="tab1" class="tab-pane active">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_all_item ORDER BY menu_all_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_all_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_all_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_all_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_all_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
            </div>
          </div>
            <div id="tab2" class="tab-pane">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_breakfast_item ORDER BY menu_breakfast_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_breakfast_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_breakfast_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_breakfast_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_breakfast_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
              </div>
            </div>
            <div id="tab3" class="tab-pane">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_all_item ORDER BY menu_all_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_all_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_all_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_all_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_all_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
              </div>
            </div>
            <div id="tab4" class="tab-pane">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_all_item ORDER BY menu_all_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_all_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_all_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_all_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_all_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
              </div>
            </div>
            <div id="tab5" class="tab-pane">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_all_item ORDER BY menu_all_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_all_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_all_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_all_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_all_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
              </div>
            </div>
            <div id="tab6" class="tab-pane">
              <div class="row">
                <?php

                $sel="SELECT * FROM menu_all_item ORDER BY menu_all_item_id DESC LIMIT 0,8";
                $Q=mysqli_query($con,$sel);
                while ($data=mysqli_fetch_assoc($Q)) {
                  ?>
                <div class="col-lg-6">
                  <div class="single-menu-product mb-30">

                    <div class="menu-product-img">
                      <img height="100" width="100" src="admin/uploads/<?= $data['menu_all_item_photo'];  ?>" alt="photo">
                    </div>
                    <div class="menu-product-content">
                      <div class="menu-title-price">
                        <div class="menu-title">
                          <h4>
                          <?= $data['menu_all_item_name']; ?>
                          </h4>
                        </div>
                        <div class="menu-price">
                          <span><?= $data['menu_all_item_price']; ?></span>
                        </div>
                      </div>
                      <p><?= $data['menu_all_item_details']; ?></p>
                    </div>
                  </div>

                </div>
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="book-table ptb-100 bg-img" id="book" style="background-image:url(assets/img/banner/book-a-table.jpg);">
        <div class="container">
          <div class="section-title text-center mb-50">
            <h2>book a table</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="reserve-form">
                <h3 class="reserv-title">Reservation Form</h3>
                <form action="#">
                  <div class="reserve-form-top">
                    <input type="text" placeholder="Full name">
                    <input type="email" placeholder="Email address">
                    <input type="text" placeholder="Mobile number">
                    <div class="date-time">
                      <select>
                        <option selected="">Select Date And Time</option>
                        <option>26 Dec - 10.00pm</option>
                        <option>2 Jan - 10.00pm</option>
                        <option>17 Dec - 10.00pm</option>
                      </select>
                    </div>
                  </div>
                  <div class="reserve-submit mt-40">
                    <button type="submit"> submit </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="book-img">
                <img src="assets/img/banner/table.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-area ptb-100 gray-bg">
        <div class="container">
          <?php
          $qry="SELECT * FROM about_people_title ORDER BY about_people_title_id DESC LIMIT 0,1";
          $q=mysqli_query($con,$qry);
          while ($data=mysqli_fetch_assoc($q)) {
            ?>
            <div class="section-title text-center mb-50">
              <h2><?= $data['about_people_title'] ?></h2>
              <p><?= $data['about_people_subtitle'] ?></p>
            </div>
          <?php } ?>
          <div class="row">
            <div class="col-md-12">

              <div class="testimonial-image-slider text-center">
                <?php
                $qry="SELECT * FROM about_people_say_details ORDER BY about_people_say_details_id DESC LIMIT 0,4";
                $q=mysqli_query($con,$qry);
                while ($data=mysqli_fetch_assoc($q)) {
                  ?>
                  <div class="single-testi-text">
                    <p><?= $data['about_people_say_details'] ?></p>
                  </div>
                <?php } ?>
              </div>

              <div class="testimonial-text-slider text-center">
                <?php
                $qry="SELECT * FROM about_people_details ORDER BY about_people_details_id DESC";
                $q=mysqli_query($con,$qry);
                while ($data=mysqli_fetch_assoc($q)) {
                  ?>
                  <div class="single-testi-img">
                    <img height="86" width="87" src="admin/uploads/<?= $data['about_people_details_photo'];  ?>" alt="">
                    <h3><?= $data['about_people_details_name'] ?></h3>
                    <h5><?= $data['about_people_details_title'] ?></h5>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-area ptb-100">
        <div class="container">
          <div class="section-title text-center mb-50">
            <h2>Our blog</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim nostrud exercitation ullamco laboris nisi.</p>
          </div>
          <div class="blog-active owl-carousel">
            <?php

            $sel="SELECT * FROM blog_all_item ORDER BY blog_all_item_id DESC LIMIT 0,3";
            $Q=mysqli_query($con,$sel);
            while ($data=mysqli_fetch_assoc($Q)) {
              ?>
            <div class="single-blog">

              <div class="blog-img">
                <img height="270" width="370" src="admin/uploads/<?= $data['blog_all_item_photo'];?>" alt="photo">
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
                <a class="readmore" href="#">Read more</a>
              </div>
            </div>
          <?php } ?>

          </div>
        </div>
      </div>
      <div class="offer-area gray-bg ptb-100 bg-img" style="background-image:url(assets/img/banner/offer.jpg);">
        <div class="container">
          <div class="row">
            <div class="xl-auto col-xl-5 ml-auto col-lg-6 col-md-12">
              <div class="offer-content">
                <h5>Exclusive Offer -20% Off This Week</h5>
                <h2>Milk Vanilla Ice Cream</h2>
                <p>Lorem ipsum Newaz dolor sit amet, consectetur adipiscing elit. Donec aliquet dolor libero, eget loved dost venenatis maurisfinibus dictumss. Vestibulum quis elit eget neque porttitor no amet dolor. </p>
                <div class="default-btn-style book-btn mt-35">
                  <a class="scroll-up" href="#book">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      get_footer();
      ?>
