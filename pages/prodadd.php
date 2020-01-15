<?php
require_once('../api/library.php');
if(!isset($_SESSION['admin'])) plo('login.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PICKER 管理後台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="../plugsin/bootstrap/bootstrap.css">
  <!-- fonts -->
  <link rel="stylesheet" href="../plugsin/fonts/fontawesome/all.min.css">
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- summernote editor -->
  <link rel="stylesheet" href="../plugsin/summernote/summernote-bs4.css" />
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
          <div class="row">
            <!-- title page -->
            <div class="col-sm-6">
              <p class="titleh1">新增商品</p>
            </div>
            <!-- 麵包屑 -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">商品管理</li>
                <li class="breadcrumb-item active">新增商品</li>
              </ol>
            </div>
          </div>
        </div>
        <hr />
      </div>

      <!-- Main content -->
      <section class="content ">
        <div class="container">

          <form method="POST" action="../api/prod.api.php?prod=add" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false">
            <button type="submit" class="btn btn-primary">新增</button>
            <hr>
            <div class="form-group">
              <h4>商品基本資訊<em class="fas fa-sort-down ml-2"></em></h4>
              <label for="prodname">商品名稱(20字)</label>
              <input type="text" class="form-control" name="prodname" />
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>主分類</label>
                  <select name="maincate" class="form-control dropmain" onchange='ischg()'>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>次分類</label>
                  <select name="subcate" class="form-control dropsub">
                  </select>
                </div>
              </div>


            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>商品成本</label>
                  <input type="text" name="costprice" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label>商品售價</label>
                  <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label>一般會員價</label>
                  <input type="text" name="nprice" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <label>會員價</label>
                  <input type="text" name="pkprice" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <h4>商品圖片<em class="fas fa-sort-down ml-2"></em></h4>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <div class="custom-file">
                    <input type="file" name="prodpic[]" accept="image/jpeg,image/jpg,image/gif,image/png" class="custom-file-input" />
                    <label class="custom-file-label" for="formcarousel">選擇檔案</label>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="custom-file">
                    <input type="file" name="prodpic[]" accept="image/jpeg,image/jpg,image/gif,image/png" class="custom-file-input" />
                    <label class="custom-file-label" for="formcarousel">選擇檔案</label>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <div class="custom-file">
                    <input type="file" name="prodpic[]" accept="image/jpeg,image/jpg,image/gif,image/png" class="custom-file-input" />
                    <label class="custom-file-label" for="formcarousel">選擇檔案</label>
                  </div>
                </div>
              </div>
              <hr />
            </div>
            <!-- 規格 -->
            <div class="form-group">
              <h4>商品規格<em class="fas fa-sort-down ml-2"></em></h4>
              <div class=" mt-3 mb-3 col-4">
              <span>規格</span>
              <input type="text" name="specname" class="form-control mb-3" placeholder="無填寫則無規格">
              </div>
              
              <table class="table table-bordered" id="prodspec">
                <thead>
                  <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>尺寸</th>
                    <th>型號</th>
                    <th>庫存</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus text-light"></em></a>
                      <a class="btn btn-danger text-light del" onclick="specdel(this)"><em class="fa fa-trash"></em></a>
                    </td>
                    <td><input type="text" name="prodspec[size][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[spec][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[stock][]" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td>
                      <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus text-light"></em></a>
                      <a class="btn btn-danger text-light del" onclick="specdel(this)"><em class="fa fa-trash"></em></a>
                    </td>
                    <td><input type="text" name="prodspec[size][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[spec][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[stock][]" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td>
                      <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus text-light"></em></a>
                      <a class="btn btn-danger text-light del" onclick="specdel(this)"><em class="fa fa-trash"></em></a>
                    </td>
                    <td><input type="text" name="prodspec[size][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[spec][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[stock][]" class="form-control" /></td>
                  </tr>
                </tbody>
              </table>
              <hr />
            </div>
            <!-- 簡短敘述 -->
            <div class="form-group ">
              <h4>簡短敘述<em class="fas fa-sort-down ml-2"></em></h4>
              <textarea class="form-control" rows="5" name="prodshortdesc"></textarea>
            </div>
            <!-- 商品敘述 -->
            <div class="form-group">
              <!-- $('#proddesc').val() -->
              <h4>商品敘述<em class="fas fa-sort-down ml-2"></em></h4>
              <textarea id="proddesc" name="proddesc" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary mb-5">新增</button>
          </form>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer"></footer>
  </div>
  <!-- ./wrapper -->


  <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->


  <!-- bs-custom-file-input -->
  <!-- <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->

  <!-- Jquery -->
  <script src="../plugsin/jquery/jquery-3.4.1.min.js"></script>
  <!-- bootstrap -->
  <script src="../plugsin/bootstrap/popper.min.js"></script>
  <script src="../plugsin/bootstrap/bootstrap.js"></script>
   <!-- summernote editor -->
   <script src="../plugsin/summernote/summernote-bs4.js"></script>
  <!-- fontawesome -->
  <script src="../plugsin/fonts/fontawesome/all.min.js"></script>
  <!-- custom js AdminLTE App -->
  <script src="../plugsin/js/admin.js"></script>
 




  <script type="text/javascript">
    var dropcatamain;
    // editor套件
    $(function() {
      $("#proddesc").summernote();
    });
    // 取得主分類的下拉選單
    $.get('../api/cata.api.php?cata=catamain', function(re) {
      dropcatamain = JSON.parse(re);
      // console.log(dropcatamain);
      let print = "<option value='ori'>請選擇分類</option>";
      for (let i = 0; i < dropcatamain.length; i++) {
        print += `
        <option value="${dropcatamain[i].Id}">${dropcatamain[i].Name}</option>
        `;
      }
      $('.dropmain').append(print)
    })
    // 當slect選擇主分類時顯示該分類底下的次分類
    function ischg() {
      let id = $('.dropmain').val();
      $.post('../api/cata.api.php?cata=catasublist', {
        id
      }, function(re) {
        if (re) {
          catasublist = JSON.parse(re);
          let print = "<option value='ori'>請選擇分類</option>";
          for (let i = 0; i < catasublist.length; i++) {
            print += `
              <option value='${catasublist[i].Id}'>${catasublist[i].Name}</option>}`;
          }
          $('.dropsub').html(print);
        }
      })

    }

    function specadd() {
      $("tbody").append(`<tr>
                  <td>
                    <a class="btn btn-info text-light" onclick="specadd()"><em class="fas fa-plus"></em></a>
                    <a onclick="specdel(this)" class="btn btn-danger text-light"><em class="fa fa-trash"></em></a>
                  </td>
                  <td><input type="text" name="prodspec[size][]" class="form-control"></td>
                  <td><input type="text" name="prodspec[spec][]" class="form-control"></td>
                  <td><input type="text" name="prodspec[stock][]" class="form-control"></td>
                </tr>`);
    }

    function specdel(e) {
      if (
        $(e)
        .parents("tbody")
        .children("tr").length > 1
      ) {
        $(e)
          .parents("tr")
          .remove();
      }
    }
  </script>
</body>

</html>