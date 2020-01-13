<!-- @format -->
<?php
require_once('api/library.php');
if (empty($_GET)) {
  plo('index.php');
}
// $sql="SELECT*FROM picker_prod WHERE id=".$_GET['id'];
$rows = $db->query("SELECT*FROM picker_prod WHERE id=" . $_GET['id'])->fetchAll();
// $rows = select2('picker_prod', 'Id=' . $_GET['id']);
if (empty($rows)) plo('index.php');


foreach ($rows as $row) {
  $prod = array(
    'Id' => $row['Id'],
    'Name' => $row['Name'],
    'Pic' => unserialize($row['MainPic']),
    'SpecName' => $row['SpecName'],
    'Spec' => unserialize($row['Spec']),
    'Price' => $row['Price'],
    'Nprice' => $row['Nprice'],
    'PkPrice' => $row['PkPrice'],
    'ShortDesc' => $row['ShortDesc'],
    'ProdDesc' => $row['ProdDesc'],
  );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Ecommerce" />
  <title>Picker批客</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css" />
  <!-- Line Icons CSS -->
  <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css" />
  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css" />

  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css" />
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css" />
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css" />
  <!-- Range Slider -->
  <link rel="stylesheet" href="assets/extras/ion.rangeSlider.css" type="text/css" />
  <link rel="stylesheet" href="assets/extras/ion.rangeSlider.skinFlat.css" type="text/css" />
  <!-- Modals Effects -->
  <link rel="stylesheet" href="assets/extras/component.css" type="text/css" />
  <!-- Rev Slider Css -->
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css" />
  <!-- Slick Slider -->
  <link rel="stylesheet" href="assets/extras/slick.css" type="text/css" />
  <link rel="stylesheet" href="assets/extras/slick-theme.css" type="text/css" />
  <!-- Nivo Lightbox Css -->

  <!-- Slicknav Css -->
  <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css" />
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />
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
            <a href="#"><i class="icon-home"></i> 首頁</a>
            <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
            <span class="current">Single Product</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header -->

  <!-- Single-prouduct Section Start -->
  <section id="product-collection" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="product-details-image">
            <div class="slider-for slider">
              <?php
              foreach ($prod['Pic'] as $value) {
                if (strpos($value, '.')) {
                  echo '<div><img src="upload/prod/' . $value . '" alt="" /></div>';
                }
              }
              ?>
            </div>
            <ul id="productthumbnail" class="slider slider-nav">
              <?php
              foreach ($prod['Pic'] as $value) {
                if (strpos($value, '.')) {
                  echo '<li><img src="upload/prod/' . $value . '" alt="" /></li>';
                }
              }
              ?>

            </ul>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="info-panel">
            <h1 class="product-title"><?= $prod['Name'] ?></h1>
            <input type="hidden" name="id" value="<?= $prod['Id'] ?>">
            <!-- Rattion Price -->
            <div class="price-ratting">
              <div class="price float-left">
                <?php if (($prod['Price'] == $prod['Nprice'])) {
                  echo '<span>$ </span><span class="realprice" style="font-size:25px">' . $prod['Price'] . '</span>';
                } else echo '<span style="color:red">$ </span><span class="realprice" style="color:red;font-size:25px">' . $prod['Nprice'] . '</span>  <del> $' . $rows[0]['Price'] . '</del>' ?>
              </div>
            </div>
            <!-- Short Description -->
            <div class="short-desc">
              <h5 class="sub-title">簡介</h5>
              <?= (empty($prod['ShortDsec'])) ? '<div style="height:100px">暫無簡介</div>' : '<p>' . $rows[0]['ShortDsec'] . '</p>' ?>

            </div>
            <!-- Product Size -->
            <div class="product-size">
              <h5 class="sub-title">規格</h5>
              <span><?= $prod['SpecName'] ?></span>
            </div>
            <!-- Product Color -->
            <div class="product-color">
              <h5 class="sub-title">選擇尺寸</h5>
              <?php
              foreach ($prod['Spec']['size'] as $value => $key) {
                echo '<span>' . $key . '</span>';
              }
              ?>
            </div>
            <div class="product-qty">
              <span class="active" onclick="chgqty(this,'sub')">-</span>
              <span calss="number">1</span>
              <span class="active" onclick="chgqty(this,'add')">+</span>
            </div>
            <!-- Quantity Cart -->
            <div class="quantity-cart">
              <button class="btn btn-common"><i class="icon-heart"></i> 加入願望清單</button>
              <button class="btn btn-common" onclick="addcart(this)"><i class="icon-basket-loaded"></i> 加入購物車</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Single-prouduct Section End -->

  <!-- Single-prouduct-tab Start -->
  <div class="single-pro-tab section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="single-pro-tab-menu">
            <!-- Nav tabs -->
            <ul class="">
              <li class="active"><a href="#description" data-toggle="tab">商品敘述</a></li>

            </ul>
          </div>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="description">
              <div class="pro-tab-info pro-description">
                <?= (empty($rows[0]['ProdDesc'])) ? '暫無商品敘述' : '<p>' . $rows[0]['ProdDesc'] . '</p>' ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Single-prouduct-tab End -->

  <!-- Footer Start -->
  <footer class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-us">
            <h3 class="widget-title">Contact Us</h3>
            <ul class="contact-list">
              <li><i class="icon-home"></i><span>888 6th 10001 Oakwood Avenue, New York City, NY</span></li>
              <li>
                <i class="icon-call-out"></i>
                <span>212-631-5135 <br />
                  212-631-5105</span>
              </li>
              <li><i class="icon-envelope"></i> <span>sales@emart.com support@emart.com</span></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6">
          <h3 class="widget-title">Useful Links</h3>
          <ul>
            <li><a href="login.html">My Account</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="wishlist.html">Wishlist</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Copyright Start -->
  <div id="copyright">
    <div class="container text-center">
      <p>All copyrights reserved &copy; 2017 - Designed & Developed by</p>
    </div>
  </div>
  <!-- Copyright End -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
  </a>

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
    $("div.product-color span").eq(0.).addClass('active');
    $("div.product-color span").click(function(e) {
      e.preventDefault();
      $(this).parent('div').find("span").removeClass("active");
      $(this).addClass("active");
    });
    function addcart(e) {
      let name = $(e).parents().find('.info-panel h1').text();
      let prodid = $(e).parents().find('.info-panel input[name=id]').val();
      let qty = $(e).parents().find('div .product-qty span').eq(1).text()
      let spec = $(e).parents().find('div .product-size span').text()
      let size = $(e).parents().find('div .product-color .active').text()
      let price = $(e).parent().siblings('.price-ratting').children().find('.realprice').text();
      $.post('api/cart.api.php?do=addcart', {
        prodid,
        name,
        qty,
        spec,
        size,
        price
      })
    }

    function chgqty(who, what) {
      switch (what) {
        case 'add':
          var $values = $(who).parent().children().eq(1).text();
          $values = $values - 0 + 1;
          $(who).parent().children().eq(1).text($values);
          break;
        case 'sub':
          var $values = $(who).parent().children().eq(1).text();
          if ($values == 1) {
            $value = 1;
          } else {
            $values = $values - 1;
          }
          $(who).parent().children().eq(1).text($values);
          break;
      }
    }
  </script>
</body>

</html>