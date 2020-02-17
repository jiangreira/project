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
  <!-- bootstrap inputfile -->
  <link rel="stylesheet" href="../plugsin/bootstrap-fileinput/css/fileinput.css">





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
            <h4>商品基本資訊<em class="fas fa-sort-down ml-2"></em></h4>
            <br>
            <!-- 名稱 -->
            <div class="form-group">
              <p class="smtitle">商品名稱</p>
              <input type="text" class="form-control" name="prodname" />
            </div>
            <!-- 分類 -->
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <p class="smtitle">主分類</p>
                  <select name="maincate" class="form-control dropmain" onchange='ischg()'>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <p class="smtitle">次分類</p>
                  <select name="subcate" class="form-control dropsub">
                  </select>
                </div>
              </div>


            </div>
            <!-- 售價資訊 -->
            <div class="form-group">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <p class="smtitle">商品成本</p>
                  <input type="text" name="costprice" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <p class="smtitle">商品售價</p>
                  <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <p class="smtitle">一般會員價</p>
                  <input type="text" name="nprice" class="form-control">
                </div>
                <div class="form-group col-md-3">
                  <p class="smtitle">會員價</p>
                  <input type="text" name="pkprice" class="form-control">
                </div>
              </div>
            </div>
            <!-- 圖片 -->

            <h4>商品圖片<em class="fas fa-sort-down ml-2"></em></h4>
            <br>
            <div class="form-group">
              <div class="file-loading">
                <input id="prodpic" name="prodpic[]" accept="image/jpeg,image/jpg,image/gif,image/png" type="file" multiple   data-show-upload="false" data-show-caption="true">
              </div>
            </div>
            <label for="input-25">Planets and Satellites</label>
            <div class="file-loading">
              <input id="input-25" name="input25[]" type="file" multiple>
            </div>


            <!-- 規格 -->
            <div class="form-group">
              <h4>商品規格<em class="fas fa-sort-down ml-2"></em></h4>
              <br>
              <div class="form-group col-md-4">
                <p class="smtitle">規格</p>
                <input type="checkbox" class="" id="nospec">
                <label class="form-check-label" for="nospec">無規格</label>
                <input type="text" name="specname" class="form-control mb-3" placeholder="請填寫規格">
              </div>

              <table class="table table-bordered" id="prodspec">
                <thead>
                  <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th><input type="text" name="whatspec" class="form-control" placeholder="註*"></th>
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
                <tfoot>註:請填寫詳細的尺寸或對應的顏色</tfoot>
              </table>
              <hr />
            </div>
            <!-- 簡短敘述 -->
            <div class="form-group">
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




  <!-- Jquery -->
  <script src="../plugsin/jquery/jquery-3.4.1.min.js"></script>
  <!-- bootstrap -->
  <script src="../plugsin/bootstrap/popper.min.js"></script>
  <script src="../plugsin/bootstrap/bootstrap.js"></script>
  <!-- file-input -->
 
  <script src="../plugsin/bootstrap-fileinput/js/plugins/piexif.js"></script>
  <script src="../plugsin/bootstrap-fileinput/js/fileinput.js"></script>
  <script src="../plugsin/bootstrap-fileinput/themes/gly/theme.js"></script>
  
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
  <script>
    $(document).ready(function() {
      $("#prodpic").fileinput({
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "選擇圖片",
        browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
        removeClass: "btn btn-danger",
        removeLabel: "刪除",
        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
        uploadClass: "btn btn-info",
        uploadLabel: "上傳",
        uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#input-25").fileinput({
        overwriteInitial: true,
        maxFileSize: 100,
        initialCaption: "The Moon and the Earth"
      });
    });
  </script>
</body>

</html>