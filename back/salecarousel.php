<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>首頁設定</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css" />
  <!-- fortable -->
  <link rel="stylesheet" href="dist/css/backend.css" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once('page/navbar.php') ?>
    <!-- end-Navbar -->
    <!-- 左側slider -->
    <?php include_once('page/slidebar.php') ?>
    <!-- end 左側slider-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <!-- title page -->
            <div class="col-sm-6">
              <p class="titleh1">輪播圖管理</p>
            </div>
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">首頁設定</li>
                <li class="breadcrumb-item active">輪播圖管理</li>
              </ol>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- add -->
          <div class="modal fade carouselpicadd" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">新增輪播圖圖片</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST" action="api/idxsalemanagent.api.php?managent=carouselpicadd" enctype="multipart/form-data" onsubmit="return check()">
                    <div class="card-body">
                      <div class="form-group">
                        <p>圖片長1900*寬500</p>
                        <div class="custom-file">
                          <input type="file" name="idxcarousel" accept="image/jpeg,image/jpg,image/gif,image/png" class="custom-file-input" />
                          <label class="custom-file-label" for="formcarousel">選擇檔案</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">新增</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- add btn -->
          <div>
            <button type="button" class="mb-3 btn btn-primary" data-toggle="modal" data-target=".carouselpicadd">新增圖片</button>
            <span class="ml-3">可上傳10張照片</span>
          </div>
          <div>
            <table id="carouselpictable" class="table table-hover">
              <thead>
                <tr>
                  <th><em class="fa fa-cog"></em></th>
                  <th>順序</th>
                  <th>顯示</th>
                  <th>圖片</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a class="btn btn-danger text-light" onclick="picmdy(this)"><em class="fa fa-trash"></em></a>
                  </td>
                  <td align="center">
                    <a class="btn btn-default"><em class="fas fa-arrow-up"></em></a>
                    <a class="btn btn-default"><em class="fas fa-arrow-down"></em></a>
                    <span class="imgsort ml-3">1</span>
                    <input type="hidden" name="id" value="22">
                  </td>
                  <td>
                    <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch />
                  </td>
                  <td><img src="../saleimg/carousel1950-1.jpg" /></td>
                </tr>
                <!-- list -->
              </tbody>
            </table>
          </div>


        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer"></footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      bsCustomFileInput.init();
    });
    $.get('api/idxsalemanagent.api.php?managent=carousellist', function(re) {
      console.log(re);
      let print = `<tr>
                  <td>
                    <a class="btn btn-info text-light" onclick="picmdy(this)"><em class="fa fa-trash"></em></a>
                  </td>
                  <td align="center">
                    <a class="btn btn-default"><em class="fas fa-arrow-up"></em></a>
                    <a class="btn btn-default"><em class="fas fa-arrow-down"></em></a>
                    <span class="imgsort ml-3">1</span>
                    <input type="hidden" name="id" value="22">
                  </td>
                  <td>
                    <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch />
                  </td>
                  <td><img src="../saleimg/carousel1950-1.jpg" /></td>
                </tr>`;

    })

    function check(e) {
      let num = $('.carouselpicadd').find('input[type=file]').val();
      return (num.length > 0) ? true : false;
    }




    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
    $("input[name='my-checkbox2']").val()
  </script>






</body>

</html>