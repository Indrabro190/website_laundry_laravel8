<aside class="main-sidebar sidebar-dark-success elevation-4">
  <!-- Brand Logo -->
  <a href="/laundry" class="brand-link" style="background-color: #565656;">
    <img src="{{asset('dist/img/laundry.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Laundry Bang Indra</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('dist/img/laundry2.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="/laundry" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="fa-solid fa-chart-line"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/dataprofile" class="nav-link">
            <i class="fa-solid fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item dropdown hidden-caret">
          <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded=""></a>
        </li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/user" class="nav-link active">
                <i class="fa-solid fa-users"></i>
                <p>Data User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datacustomer" class="nav-link active">
                <i class="fa-solid fa-person"></i>
                <p>Data Customer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datatipepaket" class="nav-link active">
                <i class="fa-solid fa-people-carry-box"></i>
                <p>Jenis Laundry</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datapaket" class="nav-link active">
                <i class="fa-solid fa-box-open"></i>
                <p>Paket</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/datacabang" class="nav-link active">
                <i class="fa-solid fa-house-flag"></i>
                <p>Cabang</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/transaksi" class="nav-link">
            <i class="fa-solid fa-money-bill-wave"></i>
            <p>
              Transaksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-book-open"></i>
            <p>
              Detail Transaksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-eye"></i>
            <p>
              Laporan
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>