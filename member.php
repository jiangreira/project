<?php
require_once('api/library.php');
if (!isset($_SESSION['userid'])) plo('login.php');
$info = $db->query("SELECT * FROM picker_memberinfo WHERE Id=" . $_SESSION['userid'])->fetchAll(PDO::FETCH_ASSOC);
$order = $db->query("SELECT * FROM picker_orderinfo WHERE MemberId=" . $_SESSION['userid'])->fetchAll(PDO::FETCH_ASSOC);
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
  <link rel="shortcut icon" href="assets/img/littlelogo.ico">

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
            <a href="index.php"><i class="icon-home"></i> 首頁</a>
            <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
            <span class="current">會員專區</span>
            <a href="api/all.api.php?do=logout" class="btn btn-common entry-title"><i class="icon-logout"></i> 登出</a>
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
        <!--Sidebar-->
        <aside id="sidebar" class="col-sm-4 col-md-3 right-sidebar">
          <!-- Popular Posts widget -->
          <div class="widget widget-popular-posts">
            <h4 class="w-title text-center">Hi,<span class="user"><?= $info[0]['Name'] ?></span></h4>
            <ul class="posts-list">
              <li>
                <div class="widget-content text-center" style="cursor: pointer;">
                  <a onclick="member('info')">會員資訊 <img src="assets/img/group (1).png" style="width:35px" /></a>
                </div>
                <div class="clearfix"></div>
              </li>
              <li>
                <div class="widget-content text-center" style="cursor: pointer;">
                  <a onclick="member('order')">訂單查詢 <img src="assets/img/box.png" style="width:35px" /></a>
                </div>
                <div class="clearfix"></div>
              </li>
            </ul>
          </div>
        </aside>
        <!--End sidebar-->

        <aside id="sidebar" class="chgori col-sm-8 col-md-9">
          <h4 class="willhide title-info text-center">請點選功能列</h4>
        </aside>


        <aside id="sidebar" class="chgmember col-sm-8 col-md-9" style="display:none">
          <div class=" widget widget-popular-posts">
            <div>
              <form action="api/member.api.php?member=infochg" method="POST">
                <h3 class="title-info">基本資訊</h3>
                <hr>
                <div class="form-group">
                  <label class="control-label" for="textarea">姓名</label>
                  <input type="text" class="form-control" placeholder="請輸入姓名" name="name" value="<?= $info[0]['Name'] ?>" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="textarea">信箱</label>
                  <input type="text" class="form-control" disabled placeholder="<?= $info[0]['Email'] ?>" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="textarea">性別</label>
                  <select name="gender" class="form-control">
                    <option value="WOMAN" <?= ($info[0]['Email'] == 'WOMAN') ? 'selected' : '' ?>>女</option>
                    <option value="MAN" <?= ($info[0]['Email'] == 'MAN') ? 'selected' : '' ?>>男</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="control-label">生日</label>
                  <input type="date" class="form-control" name='birth' value="<?= $info[0]['Birth'] ?>" />
                </div>
                <div class="add-post-btn">
                  <div class="pull-right">
                    <button href="#" class="btn btn-common">Save</button>
                  </div>

                </div>


              </form>
            </div>
          </div>
        </aside>

        <aside id="sidebar" class="chgorder col-sm-8 col-md-9" style="display:none">
          <?php
          if (!$order) {
            echo '<h4 class="title-info text-center">目前暫無訂單</h4>';
          } else {
            $time = 0;

            echo '<div class=" widget widget-popular-posts">';
            echo '<h4 class="text-center" style="margin-bottom:10px">訂單訊息如下</h4>';
            foreach ($order as $row) {
              $detail = unserialize($row['OdrDetail']);
          ?>

              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $time ?>">
                        <span class="num"><?= $time - 0 + 1 ?></span>
                        #訂單編號:<?= $row['Id'] ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse<?= $time ?>" class="panel-collapse collapse ">
                    <div class="panel-body">
                      <p>訂單時間:<?= $row['Credate'] ?></p>
                      <table class="table table-responsive table-review-order">
                        <thead>
                          <tr>
                            <th>商品名稱</th>
                            <th>規格</th>
                            <th>尺寸</th>
                            <th>數量</th>
                            <th>單價</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($detail as $list) {
                          ?>
                            <tr>
                              <td><?= $list['name'] ?></td>
                              <td><?= $list['spec'] ?></td>
                              <td><?= $list['size'] ?></td>
                              <td><?= $list['qty'] ?></td>
                              <td><?= $list['price'] ?></td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th colspan="4" class="text-right">交易金額</th>
                            <td><?= $row['DealPrice'] ?></td>
                          </tr>
                        </tfoot>
                      </table>
                      <?php

                      ?>
                    </div>
                  </div>
                </div>
              </div>


          <?php
              $time = $time - 0 + 1;
            }
            echo ' </div>';
          }
          ?>


        </aside>
      </div>
    </div>
  </div>
  <!-- End Content -->




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
    function member(who) {
      $('.chgori').css('display', 'none');
      switch (who) {
        case 'info':
          $('.chgmember').css('display', 'block');
          $('.chgorder').css('display', 'none');
          break;
        case 'order':
          $('.chgmember').css('display', 'none');
          $.get('api/member.api.php?member=memberordlist', function(re) {
            console.log
          })






          $('.chgorder').css('display', 'block');
          break;
      }
    }
  </script>
</body>

</html>