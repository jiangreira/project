<?php
require_once('api/library.php');
$catafloor0 = $db->query("SELECT * FROM picker_cate WHERE Floor=0")->fetchAll(PDO::FETCH_ASSOC);
if (empty($_GET['id'])) {
  header('location:category.php?id=all');
}
if ($_GET['id'] == 'all') {
  $prodlist = $db->query("SELECT * FROM picker_prod")->fetchAll(PDO::FETCH_ASSOC);
} else $prodlist = $db->query("SELECT * FROM picker_prod WHERE CateId=" . $_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
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
  <link rel="stylesheet" href="assets/extras/nivo-lightbox.css" type="text/css">
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
            <a href="#"><i class="icon-home"></i> Home</a>
            <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
            <span class="current">分類商品</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header -->

  <!-- Product Categories Section Start -->
  <div id="content" class="product-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="widget-ct widget-categories mb-30">
            <div class="widget-s-title">
              <h4>所有分類</h4>
            </div>
            <ul id="accordion-category" class="product-cat">
              <?php
              $category = 1;
              foreach ($catafloor0 as $floor) {
                echo '<li class="panel">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-category" href="#category' . $category . '">' . $floor['Name'] . '<span><i class="icon-arrow-down"></i></span></a>
                    <div id="category' . $category . '" class="panel-collapse collapse in" aria-expanded="true">
                      <ul class="listSidebar">';
                $catasub = $db->query("SELECT * FROM picker_cate WHERE ParentId=" . $floor['Id'])->fetchAll(PDO::FETCH_ASSOC);
                foreach ($catasub as $sub) {
                  echo '<li><a href="category.php?id=' . $sub['Id'] . '">' . $sub['Name'] . '</a></li>';
                }
                echo '</ul></div></li>';
                $category += 1;
              } ?>
              <li><a href="category.php?id=all" class="pr-all">所有產品</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 w-100">
          <div class="shop-content">
            <div class="col-md-12">
              <div class="product-option mb-30 clearfix">
                <ul class="shop-tab">
                  <li class="active"><a aria-expanded="true" href="#grid-view" data-toggle="tab"><i class="icon-grid"></i></a></li>
                  <li><a aria-expanded="false" href="#list-view" data-toggle="tab"><i class="icon-list"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="tab-content">

              <!-- 網格狀 -->
              <div id="grid-view" class="tab-pane active">
                <?php
                foreach ($prodlist as $list) {
                ?>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="shop-product">
                      <div class="product-box">
                        <input type="hidden" name="id" value="<?= $list['Id'] ?>">
                        <a href="#"><img src="upload/prod/<?= unserialize($list['MainPic'])[0] ?>"></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a class="btn-quickview md-trigger" data-modal="modal-3" onclick='quickview(this)'><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <h4 class="product-title"><a href="product-details.php?id=<?= $list['Id'] ?>"><?= $list['Name'] ?></a></h4>
                        <div class="align-items">
                          <div class="pull-left">
                            <?php if (($list['Price'] == $list['Nprice'])) {
                              echo '<span>$ </span><span class="realprice" style="font-size:25px">' . $list['Price']. '</span>';
                            } else echo '<span style="color:red;">$ </span><span class="realprice"style="color:red;font-size:25px">' . $list['Nprice'] . '</span>  <del> $' . $list['Price'] . '</del>' ?>
                        
                        </div>

                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>


              </div>
              <!-- 清單狀 -->
              <div id="list-view" class="tab-pane">
                <div class="shop-list">
                  <div class="col-md-12">
                    <div class="shop-product clearfix">
                      <div class="product-box">
                        <a href="#"><img src="assets/img/products/img-01.jpg" alt=""></a>
                        <div class="cart-overlay">
                        </div>
                        <div class="actions">
                          <div class="add-to-links">
                            <a href="#" class="btn-cart"><i class="icon-basket"></i></a>
                            <a href="#" class="btn-wish"><i class="icon-heart"></i></a>
                            <a class="btn-quickview md-trigger" data-modal="modal-3"><i class="icon-eye"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="product-info">
                        <div class="fix">
                          <h4 class="product-title pull-left"><a href="product-details.html">Qui Ratione Volup</a></h4>
                          <div class="star-rating pull-right">
                            <div class="reviews-icon">
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="i-color fa fa-star"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                            </div>
                          </div>
                        </div>
                        <div class="fix mb-10">
                          <span class="price">$ 56.20</span>
                          <span class="old-price font-16px ml-10"><del>$ 96.20</del></span>
                        </div>
                        <div class="product-description mb-20">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur tenetur fugiat quasi corrupti rerum officiis doloribus, cumque, culpa optio officia voluptatum fugit quis.</p>
                        </div>
                        <button class="btn btn-common"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to wishlist</button>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- Product Categories Section End -->

  <!-- Footer Start -->
  <?php
  include('idx_footer.php');
  ?>

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
    function quickview(e) {
      let id = $(e).parents('div .shop-product').find('input[name=id]').val()
      $.post('api/all.api.php?do=quickview', {
        id
      }, function(re) {
        let quickview = JSON.parse(re);
        $('#quickprod').find('.info-panel h3').text(`${quickview.Name}`);
        $('#quickprod').find('.product-size span').text(`${quickview.SpecName}`);
        if ((quickview.Nprice) == (quickview.Price)) {
          $('#quickprod').find('.price-ratting2 .price').html(`
          <span>$ </span><span class="realprice" style="font-size:25px">${quickview.Price}</span>`);
        } else {
          $('#quickprod').find('.price-ratting2 .price').html(`
          <span style="color:red">$ </span><span class="realprice" style="color:red;font-size:25px"> ${quickview.Nprice}</span>  <del>$ ${quickview.Price} </del>`);
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
  </script>
  <script>
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