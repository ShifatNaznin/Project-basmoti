    <?php
    require_once('functions/function.php');
    get_headertwo();
    ?>
    <?php

    $sel="SELECT * FROM menu_banner ORDER BY menu_ban_id DESC LIMIT 0,1";
    $Q=mysqli_query($con,$sel);
    while ($menu=mysqli_fetch_assoc($Q)) {
      ?>
      <div class="breadcrumb-area bg-img ptb-80" style="background-image: url(admin/uploads/<?= $menu['menu_ban_photo'];  ?>);">
        <div class="container">
          <div class="breadcrumb-content text-center">
            <h3><?= $menu['menu_ban_title']; ?></h3>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li class="active">menu page </li>
            </ul>
          </div>
        </div>
      </div>
    <?php } ?>
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
    <?php
    get_footer();
    ?>
