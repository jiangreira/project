<?php
require_once('../api/library.php');
if (!isset($_SESSION['admin'])) plo('login.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PICKER 管理後台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="../plugsin/bootstrap/bootstrap.css">
  <!-- DataTable -->
  <link rel="stylesheet" href="../plugsin/DataTables/datatables.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTable -->
  <link rel="stylesheet" href="plugsin/DataTables/datatables.css">
  <!-- custom  -->
  <link rel="stylesheet" href="../plugsin/css/admin.css">
  <link rel="stylesheet" href="../plugsin/css/backend.css">

  <link rel="stylesheet" href="../plugsin/bootstrap4-toggle/bootstrap4-toggle.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once('admin_navbar.php') ?>
    <!-- end-Navbar -->
    <!-- 左側slider -->
    <?php include_once('admin_slidebar.php') ?>
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
                <li class="breadcrumb-item"><a href="admin.php">首頁</a></li>
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
                  <form role="form" method="POST" action="../api/idxsalemanagent.api.php?managent=carouselpicadd" enctype="multipart/form-data" onsubmit="return check()">
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
            <span class="ml-3 canupload"></span>
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

  <!-- Jquery -->
  <script src="../plugsin/jquery/jquery-3.4.1.min.js"></script>
  <!-- bootstrap -->
  <script src="../plugsin/bootstrap/popper.min.js"></script>
  <script src="../plugsin/bootstrap/bootstrap.js"></script>
  <!-- fontawesome -->
  <script src="../plugsin/fonts/fontawesome/all.min.js"></script>
  <!-- DataTable -->
  <script src="../plugsin/DataTables/datatables.js"></script>
  <!-- custom js AdminLTE App -->
  <script src="../plugsin/js/admin.js"></script>
  <!-- toggle(switch) -->
  <script src="../plugsin/bootstrap4-toggle/bootstrap4-toggle.js"></script>

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script type="text/javascript">
    let carousellist;
    $.get('../api/idxsalemanagent.api.php?managent=carousellist', function(re) {
      carousellist = JSON.parse(re);
      let print = "";
      for (i = 0; i < carousellist.length; i++) {
        print += `
                <tr>
                  <td>
                    <a class="btn btn-danger text-light" onclick="del(this)"><em class="fa fa-trash"></em></a>
                    <input type="hidden" name="sort" value="${carousellist[i].Sort}">
                    <input type="hidden" name="id" value="${carousellist[i].UUID}">
                  </td>
                  <td align="center">
                    <a class="btn btn-default" onclick="sortchg(this,'up')"><em class="fas fa-arrow-up"></em></a>
                    <a class="btn btn-default" onclick="sortchg(this,'down')"><em class="fas fa-arrow-down"></em></a>
                    <span class="imgsort ml-3">${i+1}</span>
                  </td>
                  <td>
                    <input type="checkbox" value="${carousellist[i].Sort}" id="isshow"${(carousellist[i].isShow==1)?'checked':''} data-toggle="toggle" data-offstyle="danger" onchange="showChgState(this)">
                  </td>
                  <td><img src="../upload/carouselpic/${carousellist[i].Name}" /></td>
                </tr>
        `;
        $('tbody').html(print);
      }
      $('.canupload').text(`還可上傳${10-carousellist.length}張`)
    })

    // isshow
    function showChgState(e) {
      let isshow = e;
      let status = ($(isshow).is(":checked")) ? 1 : 0; //有點相反的感覺 可能是以改變後的當下給予值
      let id = $(isshow).parents('tr').find('input:hidden[name=id]').val();
      $.post('../api/idxsalemanagent.api.php?managent=carouselisshow', {
        id,
        status
      }, function(re) {})
    }
    // check can upload
    function check(e) {
      let num = $('.carouselpicadd').find('input[type=file]').val();
      return (num.length > 0) ? true : false;
    }
    // delete
    function del(e) {
      var ans = confirm('確定是否要刪除?');
      if (ans == true) {
        let id = $(e).parents('tr').find('input:hidden[name=id]').val()
        $.post('../api/idxsalemanagent.api.php?managent=carouseldel', {
          id
        }, function(e) {
          if (e == "OK") location.reload();
        })
      }
    }
    // 順序
    let prv, next;

    function sortchg(who, func) {

      let id = $(who).parents('tr').find('input:hidden[name=id]').val();
      let sort = $(who).parents('tr').find('input:hidden[name=sort]').val();
      if (func == "up") {
        prv = $(who).parents('tr').prev();
        if (prv.length != 0) {
          // console.log('yespapa');
          let previd = $(prv).find('input:hidden[name=id]').val();
          let prevsort = $(prv).find('input:hidden[name=sort]').val();
          $.post('../api/idxsalemanagent.api.php?managent=carouselshortup', {
            id,
            sort,
            previd,
            prevsort
          }, function(e) {
            if (e == "OK") location.reload();
          })
        }
      } else if (func == "down") {
        next = $(who).parents('tr').next();
        if (next.length != 0) {
          let nextid = $(next).find('input:hidden[name=id]').val();
          let nextsort = $(next).find('input:hidden[name=sort]').val();
          $.post('../api/idxsalemanagent.api.php?managent=carouselshortdown', {
            id,
            sort,
            nextid,
            nextsort
          }, function(e) {
            if (e == "OK") location.reload();
          })
        }
      }
      // console.log(id);



    }
  </script>







</body>

</html>