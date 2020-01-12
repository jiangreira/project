<!-- @format -->
<?php
include('api/library.php');
if(empty($_GET)) {
  plo('index.php');
}

$rows = select('picker_prod', 'id=' . $_GET['id']);
if(empty($rows)) plo('index.php');


foreach($rows as $row){
  $prod=array(
    'Id'=>$row['Id'],
    'Name'=>$row['Name'],
    'Pic'=>unserialize($row['MainPic']),
    'SpecName'=>$row['SpecName'],
    'Spec'=>unserialize($row['Spec']),
    'Price'=>$row['Price'],
    'Nprice'=>$row['Nprice'],
    'PkPrice'=>$row['PkPrice'],
    'ShortDesc'=>$row['ShortDesc'],
    'ProdDesc'=>$row['ProdDesc'],
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
              <img src="assets/img/logo.png" alt="" />
            </a>
          </div>
          <div class="navbar-collapse collapse shop-cart">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav">
              <li>
                <a href="#">分類<span class="caret"></span></a>
                <div class="dropdown mega-menu megamenu1">
                  <div class="row">
                    <div class="col-sm-3 col-xs-12">
                      <ul class="menulinks">
                        <li class="maga-menu-title">
                          <a href="#">Men</a>
                        </li>
                        <li><a href="category.html">Clothing</a></li>
                        <li><a href="category.html">Handbags</a></li>
                        <li><a href="category.html">Maternity</a></li>
                        <li><a href="category.html">Jewelry</a></li>
                        <li><a href="category.html">Scarves</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                      <ul class="menulinks">
                        <li class="maga-menu-title">
                          <a href="#">Women</a>
                        </li>
                        <li><a href="category.html">Handbags</a></li>
                        <li><a href="category.html">Jewelry</a></li>
                        <li><a href="category.html">Clothing</a></li>
                        <li><a href="category.html">Watches</a></li>
                        <li><a href="category.html">Hats</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                      <span class="block-last">
                        <img src="assets/img/block_menu.jpg" alt="" />
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">Shop <span class="caret"></span></a>
                <div class="dropdown mega-menu megamenu2">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <ul class="menulinks">
                        <li class="maga-menu-title">
                          <a href="#">Normal Shop Pages</a>
                        </li>
                        <li><a href="category.html">Single Category</a></li>
                        <li><a href="product-details.html">Product Details</a></li>
                        <li><a href="shopping-cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="single-shop.html">Seller's Store</a></li>
                        <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
                        <li><a href="shop-list.html">Shop List Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="order.html">Order Track</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                      <ul class="menulinks">
                        <li class="maga-menu-title">
                          <a href="#">Multi-vendor Pages</a>
                        </li>
                        <li><a href="submission.html">Product Submission</a></li>
                        <li><a href="single-shop.html">Seller Store Page</a></li>
                        <li><a href="edit-profile.html">Seller Account</a></li>
                        <li><a href="login.html">Log In</a></li>
                        <li><a href="shop.html">Search</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">Pages <span class="caret"></span></a>
                <ul class="dropdown">
                  <li>
                    <a href="about.html">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="services.html">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="contact.html">
                      Contact Us
                    </a>
                  </li>
                  <li>
                    <a href="product-details.html">
                      Product Details
                    </a>
                  </li>
                  <li>
                    <a href="team.html">
                      Team Member
                    </a>
                  </li>
                  <li>
                    <a href="checkout.html">
                      Checkout
                    </a>
                  </li>
                  <li>
                    <a href="compare.html">
                      Compare
                    </a>
                  </li>
                  <li>
                    <a href="shopping-cart.html">
                      Shopping cart
                    </a>
                  </li>
                  <li>
                    <a href="faq.html">
                      FAQs
                    </a>
                  </li>
                  <li>
                    <a href="wishlist.html">
                      Wishlist
                    </a>
                  </li>
                  <li>
                    <a href="404.html">
                      404 Error
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav">
              <li>
                <a href="login-form.html" class="cart-icon cart-btn"><i class="icon-user"></i></a>
              </li>
              <li>
                <a class="cart-icon cart-btn" href="wishlist.html"><span class="icon-heart"></span></a>
              </li>
              <li>
                <a href="#" class="cart-icon cart-btn"><i class="icon-basket"></i></a>
                <div class="cart-box">
                  <div class="popup-container">
                    <div class="cart-entry">
                      <a href="#" class="image">
                        <img src="assets/img/products/product-menu-1.jpg" alt="" />
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
                        <img src="assets/img/products/product-menu-2.jpg" alt="" />
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
        <li>
          <a class="active" href="index.php">
            Home
          </a>
          <ul class="dropdown">
            <li>
              <a class="active" href="index.php">Home V1</a>
            </li>
            <li>
              <a href="index-2.html">Home V2</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="#">Catalog</a>
          <ul class="dropdown menulinks">
            <li class="maga-menu-title">
              <a href="#">Men</a>
            </li>
            <li><a href="category.html">Clothing</a></li>
            <li><a href="category.html">Handbags</a></li>
            <li><a href="category.html">Maternity</a></li>
            <li><a href="category.html">Jewelry</a></li>
            <li><a href="category.html">Scarves</a></li>
            <li class="maga-menu-title">
              <a href="#">Women</a>
            </li>
            <li><a href="category.html">Handbags</a></li>
            <li><a href="category.html">Jewelry</a></li>
            <li><a href="category.html">Clothing</a></li>
            <li><a href="category.html">Watches</a></li>
            <li><a href="category.html">Hats</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Shop</a>
          <ul class="menulinks">
            <li class="maga-menu-title">
              <a href="#">Normal Shop Pages</a>
            </li>
            <li><a href="category.html">Single Category</a></li>
            <li><a href="product-details.html">Product Details</a></li>
            <li><a href="shopping-cart.html">Cart Page</a></li>
            <li><a href="checkout.html">Checkout Page</a></li>
            <li><a href="single-shop.html">Seller's Store</a></li>
            <li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
            <li><a href="shop-list.html">Shop List Sidebar</a></li>
            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
            <li><a href="order.html">Order Track</a></li>
            <li class="maga-menu-title">
              <a href="#">Multi-vendor Pages</a>
            </li>
            <li><a href="submission.html">Product Submission</a></li>
            <li><a href="single-shop.html">Seller Store Page</a></li>
            <li><a href="edit-profile.html">Seller Account</a></li>
            <li><a href="login.html">Log In</a></li>
            <li><a href="shop.html">Search</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Pages</a>
          <ul class="dropdown">
            <li>
              <a href="about.html">About Us</a>
            </li>
            <li>
              <a href="services.html">Services</a>
            </li>
            <li>
              <a href="contact.html">Contact Us</a>
            </li>
            <li>
              <a href="product-details.html">Product Details</a>
            </li>
            <li>
              <a href="team.html">Team Member</a>
            </li>
            <li>
              <a href="checkout.html">Checkout</a>
            </li>
            <li>
              <a href="compare.html">Compare</a>
            </li>
            <li>
              <a href="shopping-cart.html">Shopping cart</a>
            </li>
            <li>
              <a href="faq.html">FAQs</a>
            </li>
            <li>
              <a href="wishlist.html">Wishlist</a>
            </li>
            <li>
              <a href="404.html">404 Error</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Blog</a>
          <ul class="dropdown">
            <li>
              <a href="blog.html">Blog Right Sidebar</a>
            </li>
            <li>
              <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
            </li>
            <li>
              <a href="blog-full-width.html">Blog Full Width</a>
            </li>
            <li>
              <a href="blog-details.html">Blog Details</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </nav>
  </div>
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
                foreach($prod['Pic'] as $value){
                  if(strpos($value,'.')){
                    echo '<div><img src="upload/prod/'.$value.'" alt="" /></div>';
                  }
                }
            ?>                         
            </div>
            <ul id="productthumbnail" class="slider slider-nav">
            <?php
              foreach($prod['Pic'] as $value){
                if(strpos($value,'.')){
                  echo '<li><img src="upload/prod/'.$value.'" alt="" /></li>';
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
                    echo '$'.$prod['Price'];
                  }else echo '<span style="color:red;font-size:35px">$'.$prod['Nprice'].'</span>  <del> $'.$rows[0]['Price'].'</del>' ?>
              </div>
            </div>
            <!-- Short Description -->
            <div class="short-desc">
              <h5 class="sub-title">簡介</h5>
              <?=(empty($prod['ShortDsec']))?'<div style="height:100px">暫無簡介</div>':'<p>'.$rows[0]['ShortDsec'].'</p>'?>

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
                foreach($prod['Spec']['size'] as $value =>$key){
                echo '<span>'.$key.'</span>';
                }
              ?>
            </div>
            <!-- Quantity Cart -->
            <div class="quantity-cart">
              <button class="btn btn-common"><i class="icon-heart"></i> 加入願望清單</button>
              <button class="btn btn-common"><i class="icon-basket-loaded"></i> 加入購物車</button>
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
              <?=(empty($rows[0]['ProdDesc']))?'暫無商品敘述':'<p>'.$rows[0]['ProdDesc'].'</p>'?>
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
  </script>
</body>

</html>