<?php
require_once('../api/library.php');
if (!isset($_SESSION['admin'])) plo('login.php');
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PICKER 管理後台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <div class="row mb-2">
            <!-- title page -->
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">訂單管理</h1>
            </div><!-- /.col -->
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                <li class="breadcrumb-item active">訂單管理</li>
              </ol>
            </div>
          </div>
        </div>
        <hr />
      </div>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <table class="table table-hover" id="memberlist">
            <thead>
              <tr>
                <th><em class="fa fa-cog"></em></th>
                <th>訂單編號</th>
                <th>會員編號</th>
                <th>訂單時間</th>
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
  <script>
    let orderlist;
  $.get('../api/order.api.php?do=list',function(re){
    orderlist=JSON.parse(re);
    let print="";
    for(i=0;i<orderlist.length;i++){
      print+=`
          <tr>
              <th></th>
              <th>${orderlist[i].OrderId}</th>
              <th>${orderlist[i].Member}</th>
              <th>${orderlist[i].Credate}</th>
          </tr>
      `;
    }
    $('tbody').html(print);
    $('#memberlist').DataTable();

  })
  </script>
</body>

</html>