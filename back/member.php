<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>會員管理</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
              <h1 class="m-0 text-dark">會員管理</h1>
            </div><!-- /.col -->
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">會員管理</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <a href="prodadd.php" type="button" class="btn btn-primary text-light">新增商品</a>
          <div class="form-group mt-3 mb-3 prodlistselect">
            <select class="dropdown2 membertype" onchange="membertype()">
              <option value="all">全部</option>
              <option value="pk">PK會員</option>
              <option value="normal">一般會員</option>
            </select>
          </div>
          <table class="table table-hover" id="memberlist">
            <thead>
              <tr>
                <th><em class="fa fa-cog"></em></th>
                <th>會員編號</th>
                <th>會員名稱</th>
                <th>會員類型</th>
              </tr>
            </thead>
            <tbody>
              <!-- list位置 -->
            </tbody>
          </table>

        </div>
      </section>

    </div>
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
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="dist/js/pages/dashboard.js"></script> -->
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- database -->
  <script src="plugins/DataTables/datatables.js"></script>
  <script>
    var memberlist;
    $('#memberlist').DataTable();
    $.get('api/member.api.php?member=list&type=all', function(re) {
      memberlist = JSON.parse(re);
      let print = "";
      for (i = 0; i < memberlist.length; i++) {
        print += `
              <tr>
                <th></th>
                <th>${memberlist[i].Id}</th>
                <th>${memberlist[i].Name}</th>
                <th>${memberlist[i].Type}</th>
              </tr        
        `;
      }
      $('tbody').html(print);
    })

    function membertype() {
      var type = $('.membertype').val();
      console.log(type);
      if (type == 'pk') {
        $.get('api/member.api.php?member=list&type=pk', {
          type
        }, function(re) {
          memberlist = JSON.parse(re);
          let print = "";
          for (i = 0; i < memberlist.length; i++) {
            print += `
              <tr>
                <th></th>
                <th>${memberlist[i].Id}</th>
                <th>${memberlist[i].Name}</th>
                <th>${memberlist[i].Type}</th>
              </tr        
        `;
          }
          $('tbody').html(print);
        })
      } else {
        $.get('api/member.api.php?member=list&type=normal', {
          type
        }, function(re) {
          memberlist = JSON.parse(re);
          let print = "";
          for (i = 0; i < memberlist.length; i++) {
            print += `
              <tr>
                <th></th>
                <th>${memberlist[i].Id}</th>
                <th>${memberlist[i].Name}</th>
                <th>${memberlist[i].Type}</th>
              </tr `;
          }
          $('tbody').html(print);
        })
      }
    }
  </script>
</body>

</html>