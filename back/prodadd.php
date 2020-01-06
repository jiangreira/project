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
      <section class="content">
        <div class="container-fluid">

          <form method="POST" action="api/prod.api.php?prod=add" enctype="multipart/form-data" onkeydown="if(event.keyCode==13)return false">
            <button type="submit" class="btn btn-primary">新增</button>
            <hr>
            <div class="form-row">
              <div class="form-column col-6">
                <div class="form-group mb-4">
                  <label for="prodname">商品名稱(20字)</label>
                  <input type="text" class="form-control" name="prodname" />
                </div>
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
                <div class="form-row mt-3 mb-3">
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
              <div class="form-group col-6 ">
                <label>商品圖片</label>
                <div class="upload">
                  <div class="uploadImage">
                    <input type="file" name="prodpic[]" id="prodpic" multiple="multiple" accept="image/png, image/jpeg, image/gif, image/jpg" multiple />
                  </div>
                  <div class="preview">
                    <img src="" id="prodpic1" />
                    <p class="word">圖片1</p>
                  </div>
                  <div class="preview">
                    <img src="" id="prodpic2" />
                    <p class="word">圖片2</p>
                  </div>
                  <div class="preview">
                    <img src="" id="prodpic3" />
                    <p class="word">圖片3</p>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <!-- 規格 -->
            <label>商品規格</label>
            <div class="tablespec">
              <table class="table table-bordered" id="prodspec">
                <thead>
                  <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>顏色</th>
                    <th>尺寸</th>
                    <th>型號</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus"></em></a>
                      <a class="btn btn-danger del" onclick="specdel(this)"><em class="fa fa-trash"></em></a>
                    </td>
                    <td><input type="text" name="prodspec[color][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[size][]" class="form-control" /></td>
                    <td><input type="text" name="prodspec[spec][]" class="form-control" /></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr />
            <h3>非必填 
              .01
            </h3>
            <div class="form-group ">
              <label for="prodshortdesc">簡短敘述(100字)</label>
              <textarea class="form-control" rows="5" name="prodshortdesc"></textarea>
            </div>
            <!-- 商品敘述 -->
            <div class="form-group">
              <!-- $('#proddesc').val() -->
              <label for="proddesc">商品敘述</label>
              <textarea id="proddesc" name="proddesc" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            

            <button type="submit" class="btn btn-primary">新增</button>
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
                    <a class="btn btn-info" onclick="specadd()"><em class="fas fa-plus"></em></a>
                    <a onclick="specdel(this)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                  </td>
                  <td><input type="text" name="prodspec[color][]" class="form-control"></td>
                  <td><input type="text" name="prodspec[size][]" class="form-control"></td>
                  <td><input type="text" name="prodspec[spec][]" class="form-control"></td>
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
    var hasUploadedOne = false; // 已上傳過1張圖片
    var hasUploadedTwo = false; // 已上傳過2張圖片
    var hasUploadedThree = false; // 已上傳過3張圖片

    //獲取到預覽框
    var imgObjPreview1 = document.getElementById("prodpic1");
    var imgObjPreview2 = document.getElementById("prodpic2");
    var imgObjPreview3 = document.getElementById("prodpic3");

    document.getElementById("prodpic").onchange = function() {
      // 若還沒完成2張圖片的上傳
      if (!hasUploadedThree) {
        //獲取到file的檔案
        var docObj = this;

        // 一次上傳了>=3張圖片（只有前3張會真的上傳上去）
        if (docObj.files.length >= 3) {
          imgObjPreview1.src = window.URL.createObjectURL(docObj.files[0]);
          imgObjPreview2.src = window.URL.createObjectURL(docObj.files[1]);
          imgObjPreview3.src = window.URL.createObjectURL(docObj.files[2]);
          hasUploadedThree = true;
        }
        //一次只上傳了1張照片
        else {
          // 這是上傳的第一張照片
          if (!hasUploadedOne) {
            imgObjPreview1.src = window.URL.createObjectURL(docObj.files[0]);
            hasUploadedOne = true;
          }
          // 這是上傳的第二張照片
          else if (!hasUploadedTwo) {
            imgObjPreview2.src = window.URL.createObjectURL(docObj.files[0]);
            hasUploadedTwo = true;
          } else {
            imgObjPreview3.src = window.URL.createObjectURL(docObj.files[0]);
            hasUploadedThree = true;
          }
        }
      }
    };
  </script>
</body>

</html>