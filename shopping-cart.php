<?php
require_once('api/library.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Ecommerce">
  <title>Picker批客</title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="assets/img/littlelogo.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
  <!-- Line Icons CSS -->
  <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
  <!-- Range Slider -->
  <link rel="stylesheet" href="assets/extras/ion.rangeSlider.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/ion.rangeSlider.skinFlat.css" type="text/css">
  <!-- Modals Effects -->
  <link rel="stylesheet" href="assets/extras/component.css" type="text/css">
  <!-- Rev Slider Css -->
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="assets/extras/slick.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/slick-theme.css" type="text/css">
  <!-- Nivo Lightbox Css -->

  <!-- Slicknav Css -->
  <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

</head>

<body>
  <!-- logo menu -->
  <?php
  include('idx_nav.php');
  ?>

  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb">
            <a href="index.php"><i class="icon-home"></i> 首頁</a>
            <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
            <span class="current">購物車</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header -->

  <!-- Start Content -->
  <div id="content">
    <div class="container">
      <?php
      if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['user'])) {
          echo '<a href="checkout.php" class="btn btn-common">我要結帳</a>';
        } else {
          echo '<a href="login.php" class="btn btn-common">我要結帳</a>';
        }
      }
      ?>
      <h3 class="small-title text-center">購物車</h3>
      <?php
      if (!isset($_SESSION['cart'])) {
        echo '<h4 style="margin-top:10px">購物車無商品</h4>';
      } else {
        echo '<div style="margin-top:5px;height:10px;"> </div>';
        foreach ($_SESSION['cart'] as $cartprod) {
      ?>
          <div class="wishlist-entry clearfix">
            <div class="info-panel">
              <input type="hidden" name="id" value="<?= $cartprod['prodid'] ?>">
              <h3 class="mbh3"><?= $cartprod['name'] ?></h3>
              <span class="tb2">規格 - <span></span><?= $cartprod['spec'] ?></span>
              <span class="tb2">尺寸 - <span></span><?= $cartprod['size'] ?></span>
              <span class="tb2">單價 - $<span style="font-size: 25px"><?= $cartprod['price'] ?></span></span>
              <p></p>
              <span class="tb2">數量 -</span>

              <div class="product-quantity tb2" id="quantity">
              <button type="button" id="sub" class="sub">-</button>
              <input type="text" name="prodqty" value="<?= $cartprod['qty'] ?>" >
              <button type="button" id="add" class="add">+</button>
            </div>
              <div class="cartp">
                <span class="tb2">總計 $</span><span style="color:red;font-size: 32px">1280</span>
              </div>
              <div class="delicon" ondblclick="delprod(this)">
                <i class="icon-close" style="font-size: 25px"></i>
              </div>
            </div>
          </div>
      <?php
        }
      }

      ?>
      <?php
      if (isset($_SESSION['cart'])) {
        if (isset($_SESSION['user'])) {
          echo '<a href="checkout.php" class="btn btn-common">我要結帳</a>';
        } else {
          echo '<a href="login.php" class="btn btn-common">我要結帳</a>';
        }
      }
      ?>
    </div>

  </div>
  <!-- End Content -->


  <?php
  include('idx_footer.php');
  ?>
  <!-- All js here -->
  <script type="text/javascript" src="assets/js/jquery-min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
  <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="assets/js/ion.rangeSlider.js"></script>
  <script type="text/javascript" src="assets/js/modalEffects.js"></script>
  <script type="text/javascript" src="assets/js/classie.js"></script>
  <script type="text/javascript" src="assets/js/nivo-lightbox.js"></script>

  <script type="text/javascript" src="assets/js/slick.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>

  <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script>
    /*product quantity========================================================*/
    $('.add').click(function() {
      if ($(this).prev().val()) {
        $(this).prev().val(+$(this).prev().val() + 1);
        var newqty=$(this).prev().val();
        var id=$(this).parents('.wishlist-entry').find('input[name=id]').val()
        $.post('api/cart.api.php?do=mdtqty',{id,newqty},function(re){
          
        })
      }
    });
    $('.sub').click(function() {
      if ($(this).next().val() > 1) {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
      }
    });
  </script>
</body>

</html>