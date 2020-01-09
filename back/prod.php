<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>商品管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- googlefont  -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="plugins/DataTables/datatables.css">
  <link rel="stylesheet" href="dist/css/backend.css" />
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
          <div class="row mb-2">
            <!-- title page -->
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">商品清單</h1>
            </div><!-- /.col -->
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">商品管理</li>
                <li class="breadcrumb-item active">商品清單</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <a href="prodadd.php" type="button" class="btn btn-primary text-light">新增商品</a>
          <div class="form-group mt-3 mb-3 prodlistselect">
            <form calss="">
              <select name="maincate" class="dropdown2 dropmain" onchange="mainischg()"></select>
              <select name="subcate" class="dropdown2 dropsub" onchange="subischg()">
                <option value="ori">請先選擇主分類</option>
              </select>
            </form>
          </div>
          <hr>
          <table class="table table-hover t-prodlist" id="tprodlist">
            <thead>
              <tr>
                <th><em class="fa fa-cog"></em></th>
                <th>商品編號</th>
                <th>商品名稱</th>
                <th>售價</th>
                <th>一般價</th>
                <th>批客價</th>
                <th>強檔商品</th>
              </tr>
            </thead>
            <tbody>
              <!-- list位置 -->
            </tbody>
          </table>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer"></footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- database -->
  <script src="plugins/DataTables/datatables.js"></script>


  <script>
    var tablelist;
    // 取得商品資料
    $.get('api/prod.api.php?prod=list', function(re) {
      tablelist = JSON.parse(re);
      let print = "";
      for (i = 0; i < tablelist.length; i++) {
        print += `
            <tr>
                <td>
                  <a class="btn btn-info text-light" onclick=""><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger text-light" onclick=""><em class="fa fa-trash"></em></a>
                </td>
                <td>${tablelist[i].Id}</td>
                <td>${tablelist[i].Name}</td>
                <td>${tablelist[i].Price}</td>
                <td>${tablelist[i].NPrice}</td>
                <td>${tablelist[i].PkPrice}</td>
                <td>${(tablelist[i].isMainSale==0)?'否':'是'}</td>
            </tr>
        `;
      }
      $('tbody').html(print);
      $('#tprodlist').DataTable();
    })


    // 取得主分類的下拉選單
    $.get('api/cata.api.php?cata=catamain', function(re) {
      dropcatamain = JSON.parse(re);
      // console.log(dropcatamain);
      let print = `
      <option value='ori'>請選擇分類</option>
      <option value='unhome'>無分類的商品</option>
      `;
      for (let i = 0; i < dropcatamain.length; i++) {
        print += `
        <option value="${dropcatamain[i].Id}">${dropcatamain[i].Name}</option>
        `;
      }
      $('.dropmain').append(print)
      // $('.dropsub').attr('disabled','disabled');//次分類disable
    })
    // 當slect選擇主分類時顯示該分類底下的次分類
    function mainischg() {
      let id = $('.dropmain').val();
      if (id != 'ori' && id != 'unhome') {
        $.post('api/cata.api.php?cata=catasublist', {
          id
        }, function(re) {
          catasublist = JSON.parse(re);
          if (catasublist.length > 0) {
            let print = "<option value='ori'>請選擇分類</option>";
            for (let i = 0; i < catasublist.length; i++) {
              print += `
              <option value='${catasublist[i].Id}'>${catasublist[i].Name}</option>`;
              
              // $('.dropsub').removeAttr('disabled','');
            }
            $('.dropsub').html(print);
          } else {
            $('.dropsub').html("<option value='ori'>無次分類</option>");
            // $('.dropsub').attr('disabled','disabled');//次分類disable
          }
        })
      } else if (id == 'unhome') {
        $.post('api/prod.api.php?prod=unhome', function(re) {
          tablelist = JSON.parse(re);
          let print = "";
          for (i = 0; i < tablelist.length; i++) {
            print += `
            <tr>
                <td>
                  <a class="btn btn-info text-light" onclick=""><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger text-light" onclick=""><em class="fa fa-trash"></em></a>
                </td>
                <td>${tablelist[i].Id}</td>
                <td>${tablelist[i].Name}</td>
                <td>${tablelist[i].Price}</td>
                <td>${tablelist[i].NPrice}</td>
                <td>${tablelist[i].PkPrice}</td>
                <td>${(tablelist[i].isMainSale==0)?'否':'是'}</td>
            </tr>
        `;
          }
          // $('.dropsub').attr('disabled','disabled');//次分類disable
          $('.dropsub').html("<option value='ori'>-</option>");
          $('tbody').html(print);
          $('#tprodlist').DataTable();
        })
      }

      //sleect 次分類變動時 要去查次分類的資料
      function subischg() {
        let id = $('.dropsub').val();
        console.log(id);
        if (id != 'ori') {
          $.get('api/prod.api.php?prod=cataprod', {
            id
          }, function(re) {
            tablelist = JSON.parse(re);
            let print = "";
            for (i = 0; i < tablelist.length; i++) {
              print += `
            <tr>
                <td>
                  <a class="btn btn-info text-light" onclick=""><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger text-light" onclick=""><em class="fa fa-trash"></em></a>
                </td>
                <td>${tablelist[i].Id}</td>
                <td>${tablelist[i].Name}</td>
                <td>${tablelist[i].Price}</td>
                <td>${tablelist[i].NPrice}</td>
                <td>${tablelist[i].PkPrice}</td>
                <td>${(tablelist[i].isMainSale==0)?'否':'是'}</td>
            </tr>
        `;
            }
            $('tbody').html(print);
            $('#tprodlist').DataTable();
          })
        }
      }
    }
  </script>
</body>

</html>