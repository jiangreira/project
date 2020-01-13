<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Ecommerce">
  <title>Picker批客</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">

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

  <!-- Main Slider Section -->
  <section id="slider">
    <div class="tp-banner-container">
      <div class="tp-banner">
        <!-- img -->
      </div>
    </div>
  </section>
  <!-- Main Slider Section End-->

  <!-- Feature ctg Section Start -->
  <section class="feature-categories section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="feature-item-content">
            <img src="assets/img/feature/img1.jpg" alt="">
            <div class="feature-content">
              <div class="banner-text">
                <h4>Men's Collection</h4>
                <p>Summer Exclusive</p>
              </div>
              <a href="#" class="btn btn-common">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="feature-item-content">
            <img src="assets/img/feature/img3.jpg" alt="">
            <div class="feature-content">
              <div class="banner-text">
                <h4>Women's Clothing</h4>
                <p>Up to <span>70%</span> OFF</p>
              </div>
              <a href="#" class="btn btn-common">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="feature-item-content mb-30">
            <img src="assets/img/feature/img2.jpg" alt="">
            <div class="feature-content">
              <div class="banner-text accessories">
                <h4>Accessories</h4>
                <p>Handpicked for Men/Women</p>
              </div>
              <a href="#" class="btn btn-common">Shop Now</a>
            </div>
          </div>
          <div class="feature-item-content">
            <img src="assets/img/feature/img4.jpg" alt="">
            <div class="feature-content">
              <div class="banner-text accessories">
                <h4>Kids Essentials</h4>
                <p>Best Collection for Kids</p>
              </div>
              <a href="#" class="btn btn-common">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Feature ctg Section End -->

  <!-- Shop Collection Section Start -->
  <section id="shop-collection">
    <div class="container">
      <h1 class="section-title">新品上市</h1>
      <hr class="lines">
      <div class="row newarrivals">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="shop-product">
            <div class="product-box">
              <a href="#"><img src="assets/img/products/img-01.jpg" alt=""></a>
              <div class="cart-overlay">
              </div>
              <span class="sticker new"><strong>NEW</strong></span>
              <div class="actions">
                <div class="add-to-links">
                  <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                  <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                </div>
              </div>
            </div>
            <div class="product-info">
              <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>
              <div class="align-items">
                <div class="pull-left">
                  <span class="price">$49.00 <del>$20.00</del></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Shop Collection Section End -->

  <!--  Discount Product Start  -->
  <section class="discount-product-area">
    <div class="container">
      <div class="row">
        <div class="discount-text">
          <p>Best Bargains</p>
          <h3>Exclusive Deals of This Season!</h3>
          <a href="#" class="btn btn-common btn-large">View Deals</a>
        </div>
      </div>
    </div>
  </section>
  <!--  Discount Product End  -->

  <!-- New Products Section Start-->
  <section class="section">
    <div class="container">
      <h1 class="section-title">Featured Products</h1>
      <hr class="lines">
      <div class="row">
        <div class="col-md-12">
          <div id="new-products" class="owl-carousel">
            <div class="item">
              <div class="shop-product">
                <div class="product-box">
                  <a href="#"><img src="upload/prod/1578443162_40.jpg" alt=""></a>
                  <div class="cart-overlay">
                  </div>
                  <span class="sticker new"><strong>NEW</strong></span>
                  <div class="actions">
                    <div class="add-to-links">
                      <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                    </div>
                  </div>
                </div>
                <div class="product-info">
                  <h4 class="product-title"><a href="product-details.html">Qui Ratione Volup</a></h4>
                  <div class="align-items">
                    <div class="pull-left">
                      <span class="price">$49.00 <del>$20.00</del></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- New Products Section End -->

  <?php
  include('idx_footer.php');
  ?>

  <!-- All modals added here for the demo -->
  <div class="md-modal md-effect-3" id="modal-3">
    <div class="md-content">
      <!-- Product Info Start -->
      <div class="product-info row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="product-details-image">
            <div class="slider-for slider">
              <div>
                <img src="assets/img/single-product/img1.jpg" alt="">
              </div>
              <div>
                <img src="assets/img/single-product/img2.jpg" alt="">
              </div>
              <div>
                <img src="assets/img/single-product/img3.jpg" alt="">
              </div>
              <div>
                <img src="assets/img/single-product/img4.jpg" alt="">
              </div>
              <div>
                <img src="assets/img/single-product/img5.jpg" alt="">
              </div>
              <div>
                <img src="assets/img/single-product/img3.jpg" alt="">
              </div>
            </div>
            <ul id="productthumbnail" class="slider slider-nav">
              <li>
                <img src="assets/img/single-product/small/img1.jpg" alt="">
              </li>
              <li>
                <img src="assets/img/single-product/small/img2.jpg" alt="">
              </li>
              <li>
                <img src="assets/img/single-product/small/img3.jpg" alt="">
              </li>
              <li>
                <img src="assets/img/single-product/small/img4.jpg" alt="">
              </li>
              <li>
                <img src="assets/img/single-product/small/img5.jpg" alt="">
              </li>
              <li>
                <img src="assets/img/single-product/small/img3.jpg" alt="">
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="info-panel">
            <h1 class="product-title">Proin Lectus Ipsum</h1>
            <!-- Rattion Price -->
            <div class="price-ratting">
              <div class="price float-left">
                $ 18.00
              </div>
            </div>
            <!-- Short Description -->
            <div class="short-desc">
              <h5 class="sub-title">Quick Overview</h5>
              <p>There are many variations of passages of Lorem Ipsum avaable, b majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
            <!-- Product Size -->
            <div class="product-size">
              <h5 class="sub-title">Select Size</h5>
              <span>S</span>
              <span class="active">M</span>
              <span>L</span>
              <span>XL</span>
            </div>
            <!-- Quantity Cart -->
            <div class="quantity-cart">
              <button class="btn btn-common"><i class="icon-basket"></i> add to cart</button>
            </div>
            <!-- Share -->
            <div class="share-icons pull-right">
              <span>share :</span>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Info End -->
      <button class="md-close"><i class="icon-close"></i></button>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!-- the overlay element -->

  <!-- Start Loader -->
  <div id="loader">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>

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
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>


  <script>
    let mainlist;
    $.get('api/idx.api.php?idx=mainprod', function(re) {
      let mainlist = JSON.parse(re);
      let print = "";
      for (i = 0; i < mainlist.length; i++) {
        print += `
              <div class="item">
                <div class="shop-product">
                  <div class="product-box">
                    <a href="#"><img src="upload/prod/${mainlist[i].MainPic}"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <span class="sticker new"><strong>NEW</strong></span>
                    <div class="actions">
                      <div class="add-to-links">                     
                        <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.php?id=${mainlist[i].Id}">${mainlist[i].Name}</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">  
                          <span class="price">$${(mainlist[i].Nprice==mainlist[i].Price)? mainlist[i].Price :mainlist[i].Nprice } 
                            <del>${(mainlist[i].Nprice!=mainlist[i].Price)? '$'+mainlist[i].Price:''}</del></span>                                   
                      </div>
                    </div> 
                  </div>
                </div>     
              </div>`;
      }
      $('#new-products').html(print)
      $("#new-products").owlCarousel({
        navigation: true,
        pagination: false,
        slideSpeed: 1000,
        stopOnHover: true,
        autoPlay: true,
        items: 4,
        itemsDesktopSmall: [1024, 2],
        itemsTablet: [600, 1],
        itemsMobile: [479, 1]
      });
      $('#new-products').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
      $('#new-products').find('.owl-next').html('<i class="fa fa-angle-right"></i>');

    })

    $.get('api/idx.api.php?idx=mainprod', function(re) {
      let mainlist = JSON.parse(re);
      let print = "";
      for (i = 0; i < mainlist.length; i++) {
        print += `
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="shop-product">
              <div class="product-box">
                <a href="#"><img src="upload/prod/${mainlist[i].MainPic}"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <span class="sticker new"><strong>NEW</strong></span>
                <div class="actions">
                  <div class="add-to-links">                     
                    <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                    <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                  </div>
                </div>
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.php?id=${mainlist[i].Id}">${mainlist[i].Name}</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                  <span class="price">$${(mainlist[i].Nprice==mainlist[i].Price)? mainlist[i].Price :mainlist[i].Nprice } 
                            <del>${(mainlist[i].Nprice!=mainlist[i].Price)? '$'+mainlist[i].Price:''}</del></span>     
                  </div>
                </div> 
              </div>
            </div>             
          </div>`;
      }
      $('.newarrivals').html(print)
    })
    let carouselpic;
    $.get('api/idx.api.php?idx=carouselpic', function(re) {
      carouselpic = JSON.parse(re);
      let print = "";
      for (i = 0; i < carouselpic.length; i++) {
        print += `
        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="upload/carouselpic/${carouselpic[i].Name}" data-delay="4000">
            <img src="upload/carouselpic/${carouselpic[i].Name}"  data-lazyload="upload/carouselpic/${carouselpic[i].Name}" data-bgposition="top" data-duration="12000" data-ease="Power0.easeInOut" data-bgfit="115" data-bgfitend="100" data-bgpositionend="right">
          </li>
        `;
      }
      $('.tp-banner').html(`<ul>${print}</ul>`);
      $('.tp-banner').show().revolution({
        dottedOverlay: "none",
        delay: 9000,
        startwidth: 1170,
        startheight: 540,
        hideThumbs: 200,
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 5,
        navigationType: "bullet",
        navigationArrows: "solo",
        navigationStyle: "preview4",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        parallax: "mouse",
        parallaxBgFreeze: "on",
        parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
        keyboardNavigation: "off",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        shadow: 0,
        fullWidth: "on",
        fullScreen: "off",
        spinner: "spinner1",
        stopLoop: "off",
        stopAfterLoops: -1,
        stopAtSlide: -1,
        shuffle: "off",
        autoHeight: "off",
        forceFullWidth: "off",
        hideThumbsOnMobile: "off",
        hideNavDelayOnMobile: 1500,
        hideBulletsOnMobile: "off",
        hideArrowsOnMobile: "off",
        hideThumbsUnderResolution: 0,
        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ""
      });
    })
  </script>

</body>

</html>