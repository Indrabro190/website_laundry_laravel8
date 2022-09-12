<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('Template.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Paket</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Data Paket</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
        <div class="card">
            <div class="card-header bg-secondary" style="color:#fff ; font-weight: 900; padding-left: 10px;">Data Paket</div>
            <div class="card-body" style="box-shadow: 1px 5px 10px black;">
                <form class="row gx-3 gy-2 align-items-center" action="/insertpaket" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Nomer Pesanan :</label>
                        <input type="text" name="no_pesanan_masuk" class="form-control" id="specificSizeInputName" required>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Total :</label>
                        <input type="text" name="total" class="form-control" id="specificSizeInputName" required>
                    </div>

                    <div class="submit" style="margin-left: 5px; letter-spacing:10px;">
                        <button type="close" class="btn btn-secondary"><a href="/datapaket" style="color: #fff; text-decoration:none;">Back</a></button>
                        <button type="submit" class="btn btn-primary"><i style="color: #fff;">Submit</i></a></button>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </div>

      
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    



    <!-- Main Footer -->
    @include('Template.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  @include('Template.script')

</body>


</html>