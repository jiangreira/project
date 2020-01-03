<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="pickmanagent.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PICKER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          Hi,
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="order.php"" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>訂單管理</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link"><i class="nav-icon fas fa-tree"></i>
              <p>商品管理<i class="fas fa-angle-left right"></i></p>
            </a>
            <!-- 底下項目 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="prodadd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>新增商品</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="prod.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>商品清單</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="catalog.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>分類設定</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="member.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>會員管理</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                首頁設定
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- 底下項目 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="salecarousel.php".php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>輪播圖管理</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="salemainprod.php".php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>強打活動顯示設定</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="salenewprod.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>最新商品顯示設定</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="account.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>帳號管理</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>