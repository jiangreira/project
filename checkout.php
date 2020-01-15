<?php
require_once('api/library.php');
if (!isset($_SESSION['cart'])) plo('index.php');
if (!isset($_SESSION['user'])) plo('login.php');

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
  <!-- Header Section Start -->
  <?php
  include('idx_nav.php');
  ?>
  <!-- Header Section End -->

  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumb">
            <a href="index.php"><i class="icon-home"></i> 首頁</a>
            <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
            <span class="current">結帳</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header -->

  <!-- Content Section Start -->
  <div id="content" >
    <div class="container">
      <div>
        <!-- Shipping & Address -->
        <h2 class="title-checkout"><i class="icon-home"></i>Shipping Address</h2>
        <form method="POST" action="api/cart.api.php?do=order&id=<?=$_SESSION['user']?>">
          <div class="form-group col-md-3">
            <label>收件人<sup>*</sup></label>
            <input class="form-control" type="text" name="recipient">
          </div>
          <div class="form-group col-md-3">
            <label>收件人電話<sup>*</sup></label>
            <input class="form-control" type="text" name="re_phone">
          </div>
          <div class="form-group col-md-6">
            <label>收件人地址<sup>*</sup></label>
            <input class="form-control" type="text" name="re_addr">
          </div>
        
      </div>

      <div class="order-details">
        <h2 class="title-checkout"><i class="icon-basket-loaded"></i>Your Order</h2>
        <div class="order_review margin-bottom-35">
          <table class="table table-responsive table-review-order">
            <thead>
              <tr>
                <th class="product-name">商品</th>
                <th class="product-total">數量</th>
                <th class="product-total">金額</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $subtotal = 0;
              foreach ($_SESSION['cart'] as $cartprod) {
              ?>
                <tr>
                  <td>
                    <p><?= $cartprod['name'] ?></p>
                  </td>
                  <td>
                    <p class="price"><?= $cartprod['qty'] ?></p>
                  </td>
                  <td>
                    <p class="price"><?= $cartprod['price'] ?></p>
                  </td>
                </tr>

              <?php
                $subtotal += $cartprod['qty'] * $cartprod['price'];
              }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>
                  <!-- <p>根據您的會員等級,已顯示折扣後金額</p> -->
                </th>
                <td>小計:</td>
                <td>
                  <p class="price">$ <?= number_format($subtotal, 2) ?></p>
                </td>
              </tr>
              <tr>
                <th><input type="hidden" name="total" value="<?=$subtotal?>"></th>
                <td>Total</td>
                <td>
                  <p class="price">$ <?= number_format($subtotal, 2) ?></p>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      

      <div class="row">
        <div class="col-md-6 col-sm-6 col-sx-12">
        </div>

        <div class="col-md-6 col-sm-6 col-sx-12">
          <!-- GRAND TOTAL -->
          <div class="card card--padding fill-bg">
            <table class="table-total-checkout">
              <tbody>
                <tr>
                  <th>總金額:</th>
                  <td>$ <?= number_format($subtotal, 2) ?></td>
                </tr>
              </tbody>
            </table>
            <button class="btn btn-common btn-full" type="submit">結帳 <span class="icon-action-redo"></span></button>
          </div>
          <!-- /GRAND TOTAL -->
        </div>
      </div>
    </div>
  </div>
  </form>
  <!-- Content Section End -->

  <!-- Footer Start -->
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
    
  </script>
</body>

</html>