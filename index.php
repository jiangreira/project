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


  <!-- Modal -->
  <div class="modal fade" id="quickprod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:8001">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="prodid" value="">
          <div class="info-panel">
            <h3>Proin Lectus Ipsum</h3>
            <!-- Rattion Price -->
            <div class="price-ratting2">
              <div class="price float-left">$ 120.00</div>
            </div>
            <!-- Product Size -->
            <div class="product-size">
              <h5 class="tb">規格</h5>
              <span>S</span>
            </div>
            <div class="product-color">
              <h5 class="tb">選擇尺寸</h5>
            </div>
            <div class="product-qty">
              <span class="active" onclick="chgqty(this,'sub')">-</span>
              <span calss="number">1</span>
              <span class="active" onclick="chgqty(this,'add')">+</span>
            </div>
            <!-- Quantity Cart -->
            <div class="quantity-cart">
              <button type="button" class="btn btn-common" onclick="addcart(this)"><i class="icon-basket"></i>加入購物車</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>


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
                  <input type="hidden" name="id" value="${mainlist[i].Id}">
                    <a href="#"><img src="upload/prod/${mainlist[i].MainPic}"  alt=""></a>
                    <div class="cart-overlay">
                    </div>
                    <div class="actions">
                      <div class="add-to-links">                     
                        <a href="#" class="btn-wish"><i class="icon-heart"></i></>
                        <a class="btn-quickview md-trigger" onclick='quickview(this)'><i class="icon-eye"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="product-info">
                    <h4 class="product-title"><a href="product-details.php?id=${mainlist[i].Id}">${mainlist[i].Name}</a></h4>  
                    <div class="align-items">
                      <div class="pull-left">  
                          <span class="realprice">$${(mainlist[i].Nprice==mainlist[i].Price)? mainlist[i].Price :mainlist[i].Nprice } 
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
                  <input type="hidden" name="id" value="${mainlist[i].Id}">
                  <a href="#"><img src="upload/prod/${mainlist[i].MainPic}"  alt=""></a>
                <div class="cart-overlay">
                </div>
                <div class="actions">
                  <div class="add-to-links">                     
                      <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                      <a class="btn-quickview md-trigger" onclick='quickview(this)'><i class="icon-eye"></i></a>
                  </div>
                </div>
              </div>
              <div class="product-info">
                <h4 class="product-title"><a href="product-details.php?id=${mainlist[i].Id}">${mainlist[i].Name}</a></h4>  
                <div class="align-items">
                  <div class="pull-left">
                  <span class="realprice">$${(mainlist[i].Nprice==mainlist[i].Price)? mainlist[i].Price :mainlist[i].Nprice } 
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

    function quickview(e) {
      let id = $(e).parents('div .shop-product').find('input[name=id]').val()
      $.post('api/all.api.php?do=quickview', {
        id
      }, function(re) {
        let quickview = JSON.parse(re);
        $('#quickprod').find('.info-panel h3').text(`${quickview.Name}`);
        $('#quickprod').find('.product-size span').text(`${quickview.SpecName}`);
        if ((quickview.Nprice) == (quickview.Price)) {
          $('#quickprod').find('.price-ratting2 .price').html(`<span font-size:25px">$ </span><span class="realprice" style="font-size:25px">${quickview.Price}</span>`);
        } else {
          $('#quickprod').find('.price-ratting2 .price').html(`
          <span style="color:red">$ </span><span style="color:red;font-size:25px"> ${quickview.Nprice}</span>  <del>$ ${quickview.Price} </del>`);
        }
        let print = '';
        for (i = 0; i < quickview.Spec.size.length; i++) {
          print += `<span>${quickview.Spec.size[i]}</span>`;
        }
        $('#quickprod').find('.product-color').html(`<h5 class="tb">選擇尺寸</h5>${print}`);
        $('#quickprod').modal();


        $('#quickprod').find('input[name=prodid]').val(id);
        $("div.product-color span").eq(0.).addClass('active');
        $("div.product-color span").click(function(e) {
          e.preventDefault();
          $(this).parent('div').find("span").removeClass("active");
          $(this).addClass("active");
        });
      })
    }
    let test

    function addcart(e) {
      let name = $(e).parents().find('.info-panel h3').text();
      let prodid = $(e).parents('#quickprod').find('input[name=prodid]').val()
      let qty = $(e).parents().find('div .product-qty span').eq(1).text()
      let spec = $(e).parents().find('div .product-size span').text()
      let size = $(e).parents().find('div .product-color .active').text()
      let price = $(e).parent().siblings('.price-ratting2').children().find('.realprice').text();

      $.post('api/cart.api.php?do=addcart', {
        prodid,
        name,
        qty,
        spec,
        size,
        price
      }, function(re) {
        $('#quickprod').modal('hide');
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