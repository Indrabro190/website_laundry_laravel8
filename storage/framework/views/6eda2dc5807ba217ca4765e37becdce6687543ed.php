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
              <h1 class="m-0">Pesanan Customer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Pesanan Customer</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Pesanan</h3>
                  <div class="submit" style="margin-left: 890px;">
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><a href="/tambahpesanan" style="color: #fff;"><i class="fa-solid fa-plus"></i></a></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-secondary" role="alert">
                  <?php echo e($message); ?>

                </div>
                <?php endif; ?>
                <div class="card-body">
                  <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Paket</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th colspan="2" style="text-align:center ;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      ?>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($m->id); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><?php echo e($m->nama_paket); ?></td>
                        <td><?php echo e($m->jenis); ?></td>
                        <td><?php echo e($m->harga); ?></td>
                        <td><?php echo e($m->status); ?></td>
                        <td>
                          <button type="button" class="btn btn-primary"><a href="/tampilkandatapesanan/<?php echo e($m->id); ?>"><i class="fa-solid fa-pen-to-square" style="color: #fff;"></i></a></button>
                          |
                          <button type="button" class="btn btn-danger delete" data-id="<?php echo e($m->id); ?>" data-nama="<?php echo e($m->nama); ?>"><a href="#"><i class="fa-solid fa-user-xmark" style="color: #fff;"></i></a></button>
                          |
                          <button type="button" class="btn btn-warning"><a id="set_detail" href="/detailpesanan/<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modal-detail" data-nama="<?php echo e($m->nama); ?>" data-nama_paket="<?php echo e($m->nama_paket); ?>" data-jenis="<?php echo e($m->jenis); ?>" data-harga="<?php echo e($m->harga); ?>" data-status="<?php echo e($m->status); ?>" style="color: #fff; text-decoration: none;" title="Detail Karyawan">Detail</a></button>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="clodee" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Detail Paket</h4>
            </div>
            <div class="modal-body table-responsive">
              <table class="table table-bordered no-margin">
                <tbody>
                  <tr>
                    <th>Nama</th>
                    <td><span id="nama"></span></td>
                  </tr>
                  <tr>
                    <th>Paket</th>
                    <td><span id="nama_paket"></span></td>
                  </tr>
                  <tr>
                    <th>Jenis</th>
                    <td><span id="jenis"></span></td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td><span id="harga"></span></td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td><span id="status"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.content-wrapper -->




    <!-- Main Footer -->
    <?php echo $__env->make('Template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <?php echo $__env->make('Template.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
<!-- modaldetail -->
<script>
  $(document).ready(function() {
    $(document).on('click', '#set_detail', function() {
      var nama = $(this).data('nama');
      var nama_paket = $(this).data('nama_paket');
      var jenis = $(this).data('jenis');
      var harga = $(this).data('harga');
      var status = $(this).data('status');
      $('#nama').text(nama);
      $('#nama_paket').text(nama_paket);
      $('#jenis').text(jenis);
      $('#harga').text(harga);
      $('#status').text(status);
    })
  })
</script>

<script type="text/javascript">
  window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
</script>
<script>
  $('.delete').click(function() {
    var pesananid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    swal({
        title: "Yakin Nih?",
        text: "Ingin Menghapus Data Dengan Nama " + nama + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletepesanan/" + pesananid + ""
          swal("Data Berhasil Di Hapus Bro", {
            icon: "success",
          });
        } else {
          swal("Data Kamu Masih Disimpan");
        }
      });
  });
</script>


<?php if(Session::has('success')): ?>
<script>
  toastr.success("<?php echo e(session('success')); ?>")
</script>
<?php endif; ?>

</html><?php /**PATH D:\laravel\laundry\resources\views/datapesanan.blade.php ENDPATH**/ ?>