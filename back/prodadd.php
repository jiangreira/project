<!-- @format -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AdminLTE 3 | General Form Elements</title>
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
          <!-- /.row -->
        </div>
        <hr />
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content ">
        <div class="container">

          <form method="POST" action="api/prod.api.php?prod=add" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false">
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
              <table class="table table-bordered" id="prodspec">
                <thead>
                  <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>顏色</th>
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
                    <td><input type="text" name="prodspec[color][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[size][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[spec][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[stock][]" class="form-control" /></td>
                  </tr>
                  <tr>
                    <td>
                      <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus text-light"></em></a>
                      <a class="btn btn-danger text-light del" onclick="specdel(this)"><em class="fa fa-trash"></em></a>
                    </td>
                    <td><input type="text" name="prodspec[color][]" class="form-control" /></td>
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
    var dropcatamain;
    $(document).ready(function() {
      bsCustomFileInput.init();
    });

    $(function() {
      $("#proddesc").summernote();
    });
    // 取得主分類的下拉選單
    $.get('api/cata.api.php?cata=catamain', function(re) {
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
      $.post('api/cata.api.php?cata=catasublist', {
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
                  <td><input type="text" name="prodspec[color][]" class="form-control"></td>
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