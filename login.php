<!-- @format -->

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
  <style>
    @media screen and (max-width: 768px) {}
  </style>
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
            <span class="current">登入/註冊</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header -->

  <!-- Start Content -->
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="login">
            <div class="login-form-container">
              <div class="login-text">
                <h3>會員登入</h3>
              </div>
              <!-- Login Form Start -->
              <form class="login-form" role="form" method="post" action="api/all.api.php?do=login">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Username" name="name" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                  </div>
                </div>
                <div class="button-box">
                  <button type="submit" class="btn btn-common log-btn">登入</button>
                  <div class="login-toggle-btn">
                    <a class="chgregister">還不是會員?</a>
                  </div>
                </div>

              </form>
              <!-- Login Form End -->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login">
            <div class="login-form-container">
              <div class="login-text">
                <h3>註冊帳號</h3>
              </div>
              <!-- Account Form Start -->
              <form class="login-form" role="form" method="post" action="api/all.api.php?do=register">
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="帳號：需包含8-12碼英文數字" name="name" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="password" class="form-control" placeholder="密碼：需包含8-12碼英文數字" name="password" />
                  </div>
                </div>
                <div class="form-group">
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Email" name="email" />
                  </div>
                </div>
                <div class="button-box">
                  <button type="submit" class="btn btn-common log-btn">註冊</button>
                </div>
              </form>
              <!-- Account Form End -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer Start -->
  <?php
  include('idx_footer.php');
  ?>
  <!-- Footer End -->


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
</body>

</html>