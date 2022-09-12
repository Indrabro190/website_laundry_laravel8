<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <?php echo $__env->make('Template.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <?php echo $__env->make('Template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $__env->make('Template.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                    <?php echo csrf_field(); ?>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Kode Pemesanan :</label>
                        <input type="text" name="KODE_PEMESANAN_ID" class="form-control" id="specificSizeInputName" required>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Nama Paket :</label>
                        <input type="text" name="NAMA_PAKET_ID" class="form-control" id="specificSizeInputName" required>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Jenis :</label>
                        <input type="text" name="JENIS_ID" class="form-control" id="specificSizeInputName" required>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Harga :</label>
                        <input type="text" name="HARGA_ID" class="form-control" id="specificSizeInputName" required>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Status :</label>
                        <input type="text" name="STATUS" class="form-control" id="specificSizeInputName" required>
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
    <?php echo $__env->make('Template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <?php echo $__env->make('Template.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>


</html><?php /**PATH D:\laravel\laundry\resources\views/tambahpaket.blade.php ENDPATH**/ ?>