<?php
require_once('library.php')
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Picker後台管理</title>
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
  <!-- summernote editor -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet" />
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
              <p class="titleh1">分類設定</p>
            </div>
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">商品管理</li>
                <li class="breadcrumb-item active">分類設定</li>
              </ol>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <hr />
          <div class="cataadd">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".cataaddmodal">新增主分類</button>
          </div>
          <!-- add -->
          <div class="modal fade cataaddmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">新增主分類</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- form start -->
                  <form method="POST" name='addcata' action="api/cata.api.php?cata=add">
                    <div class="form-group">
                      <label for="Name">分類名稱</label>
                      <input type="text" class="form-control" name="Name" placeholder="請輸入名稱">
                      <input type="hidden" name="Floor" value="0">
                    </div>
                    <button type="submit" class="btn btn-primary">新增</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modify -->
          <div class="modal fade catamdymodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">修改分類</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form role="form" method="POST">
                    <div class="form-group catamain">
                      <label>主分類</label>
                      <span class="catamainname"></span>
                      <input type="text" class="form-control" name="catamainname" value="">

                    </div>
                    <div class="form-group catasub">
                      <label>次分類</label>
                      <span class="catasubname"></span>
                      <input type="text" class="form-control" name="catasubname" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">修改</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- addsub -->
          <div class="modal fade catasubmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">新增次分類</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="addsub" method="POST" action="api/cata.api.php?cata=addsub">
                    <div class="form-group catamain">
                      <label>主分類</label>
                      <span class="catamainname"></span>
                      <input type="hidden" name="Catamainid" value="">

                    </div>
                    <div class="form-group catasub">
                      <label>次分類</label>
                      <input type="hidden" name="Floor" value="1">
                      <input type="text" class="form-control" name="Catasubname" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">修改</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="catalist">
            <table class="table table-bordered" id="cataloglist">
              <thead>
                <tr>
                  <th>**</th>
                  <th>順序</th>
                  <th>主分類</th>
                  <th>次分類</th>
                </tr>
              </thead>
              <tbody>
                <!-- list -->
              </tbody>
            </table>
            <div class="row">
              <!-- 分頁 -->
              <div class="col col-xs-4">Page 1 of 5</div>
              <div class="col col-xs-8  ">
                <ul class="pagination pull-right">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
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
  <script src="dist/js/adminlte.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- summernote editor -->
  <script src="plugins/summernote/summernote-bs4.js"></script>
  <script type="text/javascript">
    let list;


    $(document).ready(function() {
      bsCustomFileInput.init();
    });



    $.get('api/cata.api.php?cata=list', function(re) {
      list = JSON.parse(re)
      let print = ""
      for (let i = 0; i < list.length; i++) {
        print += `
        <tr>
          <td>
            <a class="btn btn-info" onclick="catasubedit(this)"><em class="fa fa-pencil"></em></a>
            <a class="btn btn-info" onclick="catasubadd(this)"><em class="fas fa-plus"></em></a>
            <a class="btn btn-danger" onclick="catadel(this)"><em class="fa fa-trash"></em></a>
          </td>
          <td>
            <a class="btn btn-default"><em class="fas fa-arrow-up"></em></a>
            <a class="btn btn-default"><em class="fas fa-arrow-down"></em></a>
          </td>
          <td>
            <input type="hidden" name="catamainid" value="${list[i].Id}">
            <span>${list[i].Name}\(id=${list[i].Id}\)</span>
          </td>
          <td>
            <input type="hidden" name="catasubid" value="subidid">
            <span></span>
          </td>
        </tr>`;
        $('tbody').html(print);
      }

    })

    $(function() {
      $("#proddesc").summernote();
    });

    function catasubadd(e) {
      var catamainid = $(e).parents("tr").children('td').find("input[name=catamainid]").val();
      var catamainname = $(e).parents("tr").children('td').eq(2).find('span').text()
      $(".catasubmodal").modal();

      $('.catamainname').text(catamainname);
      $('input[name=Catamainid]').val(catamainid);
      // console.log(catamainid,catamainname)

    }

    function catadel(e) {
      if ($(e).parents("tbody").children("tr").length > 1) {
        $(e).parents("tr").remove();
      }
    }

    function catasubedit(e) {
      var catamainid = $(e).parents("tr").children('td').find("input[name=catamainid]").val();
      var catamainname = $(e).parents("tr").children('td').eq(2).find('span').text()
      var catasubid = $(e).parents("tr").children('td').find("input[name=catasubid]").val();
      var catasubname = $(e).parents("tr").children('td').eq(3).find('span').text()

      $(".catamdymodal").modal();

      if (catamainid.length > 0 && (catasubid == undefined)) {

        $('.catamainname').hide();
        $('input[name=catamainname]').val(catamainname);
        $('.catasub').hide()
      } else {
        $('input[name=catamainname]').hide();
        $('.catamainname').text(catamainname);
        $('input[name=catasubname]').val(catasubname);
      }
    }
  </script>
</body>

</html>