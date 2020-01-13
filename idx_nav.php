<?php
require('api/library.php');
$catafloor0 = select('picker_cate', 'Floor=0');

?>


<div class="header">
  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo.png" alt="">
          </a>
        </div>
        <div class="navbar-collapse collapse shop-cart">
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav">
            <li>
              <a href="category.php">全部商品<span class="caret"></span></a>
              <div class="dropdown mega-menu megamenu1">
                <div class="row">
                  <?php
                  foreach ($catafloor0 as $floor) {
                    echo '<div class="col-sm-3 col-xs-12"><ul class="menulinks">
                    <li class="maga-menu-title">
                    <a href="category.php?id=' . $floor['Id'] . '">' . $floor['Name'] . '</a></li>';
                    $catasub = select('picker_cate', 'ParentId=' . $floor['Id']);
                    foreach ($catasub as $sub) {
                      echo '<li><a href="category.php?id=' . $sub['Id'] . '">' . $sub['Name'] . '</a></li>';
                    }
                    echo '</ul></div>';
                  } ?>

                </div>
              </div>
            </li>
          </ul>
          <!-- member/cart wish -->
          <ul class="nav navbar-nav">
            <li>
              <a href="login.php" class="cart-icon cart-btn"><i class="icon-user"></i></a>
            </li>
            <li><a class="cart-icon cart-btn" href="wishlist.php"><span class="icon-heart"></span></a></li>
            <li>
              <a href="#" class="cart-icon cart-btn"><i class="icon-basket"></i></a>
              <div class="cart-box">
                <div class="popup-container">
                  <div class="cart-entry">
                    <a href="#" class="image">
                      <img src="assets/img/products/product-menu-1.jpg" alt="">
                    </a>
                    <div class="content">
                      <a href="#" class="title">Pullover Batwing</a>
                      <p class="quantity">Quantity: 3</p>
                      <span class="price">$45.00</span>
                    </div>
                    <div class="button-x">
                      <i class="icon-close"></i>
                    </div>
                  </div>
                  <div class="cart-entry">
                    <a href="#" class="image">
                      <img src="assets/img/products/product-menu-2.jpg" alt="">
                    </a>
                    <div class="content">
                      <a href="#" class="title">Pullover Batwing</a>
                      <p class="quantity">Quantity: 3</p>
                      <span class="price">$90.00</span>
                    </div>
                    <div class="button-x">
                      <i class="icon-close"></i>
                    </div>
                  </div>
                  <div class="summary">
                    <div class="subtotal">Sub Total</div>
                    <div class="price-s">$210.5</div>
                  </div>
                  <div class="cart-buttons">
                    <a href="#" class="btn btn-border-2">View Cart</a>
                    <a href="#" class="btn btn-common">Checkout</a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navigation List -->
        </div>
      </div>
    </div>
    <!-- End Header Logo & Naviagtion -->

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
      <li><a class="active" href="index.php">首頁</a></li>
      <li><a href="category.php?id=all">全部商品</a>
        <ul class="dropdown menulinks">
        <?php
          foreach ($catafloor0 as $floor) {
            echo '<li class="maga-menu-title"><a href="category.php?id=' . $floor['Id'] . '">' . $floor['Name'] . '</a></li>';
          } ?>
        </ul>
      </li>
      <li><a href="about.php">關於Picker批客</a></li>
      <li><a href="contact.php">聯絡我們</a></li>
    </ul>
    <!-- Mobile Menu End -->
  </nav>
</div>