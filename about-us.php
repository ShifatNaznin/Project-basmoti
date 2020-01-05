    <?php
    require_once('functions/function.php');
    get_headertwo();
    ?>
    <?php

    $sel="SELECT * FROM about_banner ORDER BY about_ban_id DESC LIMIT 0,1";
    $Q=mysqli_query($con,$sel);
    while ($about=mysqli_fetch_assoc($Q)) {
      ?>
      <div class="breadcrumb-area bg-img ptb-80" style="background-image: url(admin/uploads/<?= $about['about_ban_photo'];  ?>);">
        <div class="container">
          <div class="breadcrumb-content text-center">
            <h3><?= $about['about_ban_title']; ?></h3>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li class="active">about us </li>
            </ul>
          </div>
        </div>
      </div>
    <?php } ?>
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
    <div class="count-area pt-100 pb-70 bg-img" style="background-image:url(assets/img/banner/count.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="single-count mb-30 text-center">
              <div class="count-icon">
                <i class="fa fa-smile-o"></i>
              </div>
              <h2 class="count">700</h2>
              <span>Visitor Everyday</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-count mb-30 text-center">
              <div class="count-icon">
                <i class="fa fa-cutlery"></i>
              </div>
              <h2 class="count">350</h2>
              <span>Menu Items</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-count mb-30 text-center">
              <div class="count-icon">
                <i class="fa fa-male"></i>
              </div>
              <h2 class="count">400</h2>
              <span>Expert Chef</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="single-count mb-30 text-center">
              <div class="count-icon">
                <i class="fa fa-heart"></i>
              </div>
              <h2 class="count">990</h2>
              <span>Test & love</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="team-area pt-100 pb-70 gray-bg">
      <div class="container">
        <?php
        $sel="SELECT * FROM about_team_title ORDER BY about_team_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {

          ?>
          <div class="section-title text-center mb-50">
            <h2><?= $data['about_team_title']; ?></h2>
            <p><?= $data['about_team_subtitle']; ?></p>
          </div>
        <?php } ?>
        <div class="row">
          <?php
          $sel="SELECT * FROM about_team_details ORDER BY about_team_details_id DESC LIMIT 0,4";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {

            ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="single-team text-center mb-30">
                <div class="team-img-icon overlay">
                  <img height="300" width="370" src="admin/uploads/<?= $data['about_team_details_photo'];  ?>" alt="">
                  <div class="team-social-icon">
                    <ul>
                      <li>
                        <a class="facebook" href="#">
                          <i class="ion-social-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a class="twitter" href="#">
                          <i class="ion-social-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a class="instagram" href="#">
                          <i class="ion-social-instagram-outline"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-info">
                  <h3><?= $data['about_team_details_name'] ?></h3>
                  <span><?= $data['about_team_details_title'] ?></span>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <div class="services-area pt-100 pb-70">
      <div class="container">

        <?php
          $sel="SELECT * FROM about_service_title ORDER BY about_service_title_id DESC LIMIT 0,1";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {

            ?>
            <div class="section-title text-center mb-50">
              <h2><?= $data['about_service_title'] ?></h2>
              <p><?= $data['about_service_subtitle'] ?></p>
            </div>
          <?php } ?>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <?php
            $qry="SELECT * FROM about_service_details ORDER BY about_service_details_id DESC LIMIT 1,1";
            $q=mysqli_query($con,$qry);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
              <div class="single-service text-center mb-30">
                <i class="fa fa-cutlery"></i>
                <h3><?= $data['about_service_details_title']?></h3>
                <p><?= $data['about_service_details']?></p>
              </div>
            <?php } ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <?php
            $qry="SELECT * FROM about_service_details ORDER BY about_service_details_id DESC LIMIT 2,1";
            $q=mysqli_query($con,$qry);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
              <div class="single-service text-center mb-30">
                <i class="fa fa-cogs"></i>
                <h3><?= $data['about_service_details_title']?></h3>
                <p><?= $data['about_service_details']?></p>
              </div>
            <?php } ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <?php
            $qry="SELECT * FROM about_service_details ORDER BY about_service_details_id DESC LIMIT 3,1";
            $q=mysqli_query($con,$qry);
            while ($data=mysqli_fetch_assoc($q)) {
              ?>
              <div class="single-service text-center mb-30">
                <i class="fa fa-heart-o"></i>
                <h3><?= $data['about_service_details_title']?></h3>
                <p><?= $data['about_service_details']?></p>
              </div>
            <?php } ?>
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
    </div>
    </div>
    <?php get_footer(); ?>
