    <?php
    require_once('functions/function.php');
    get_headertwo();
    ?>
    <?php

    $sel="SELECT * FROM gallery_banner ORDER BY gallery_ban_id DESC LIMIT 0,1";
    $Q=mysqli_query($con,$sel);
    while ($data=mysqli_fetch_assoc($Q)) {
      ?>
      <div class="breadcrumb-area bg-img ptb-80" style="background-image: url(admin/uploads/<?= $data['gallery_ban_photo'];  ?>);">
        <div class="container">
          <div class="breadcrumb-content text-center">
            <h3><?= $data['gallery_ban_title']; ?></h3>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li class="active">Gallery page</li>
            </ul>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="gallery-area pt-100 pb-70 gray-bg">
      <div class="container">
        <?php

        $sel="SELECT * FROM gallery_details_title ORDER BY gallery_details_title_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {
          ?>
        <div class="section-title text-center mb-50">
          <h2><?= $data['gallery_details_title']; ?></h2>
          <p><?= $data['gallery_details_subtitle']; ?></p>
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
                  <a class="img-popup" href="assets/img/gallery/1.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/2.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/3.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/4.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/5.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/6.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/7.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/8.jpg">
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
                  <a class="img-popup" href="assets/img/gallery/9.jpg">
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
    <?php
    get_footer();
    ?>
