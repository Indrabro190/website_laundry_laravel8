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
              <h1 class="m-0" style="font-weight: 600;">Data Jenis Laundry</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Data Tipe Paket</li>
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
                  <h3 class="card-title">Tabel Tipe Paket</h3>
                  <div class="submit" style="margin-left: 890px;">
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddUser"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <!-- <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success" role="alert">
                  <?php echo e($message); ?>

                </div>
                <?php endif; ?> -->
                <div class="card-body">
                  <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr align="center">
                        <th>No</th>
                        <th>Jenis Laundry</th>
                        <th colspan="2" style="text-align:center ;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      ?>
                      <?php $__empty_1 = true; $__currentLoopData = $tipepaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr align="center">
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($m->nametipe); ?></td>
                        <td>
                          <a href="#modalEditUser<?php echo e($m->id); ?>" data-toggle="modal" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                          |
                          <a href="#" data-toggle="modal" data-id="<?php echo e($m->id); ?>" data-nama="<?php echo e($m->nametipe); ?>" class="btn btn-danger delete"><i class="fa-solid fa-user-xmark"></i></a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td align="center" colspan="3">Tidak Ada Data</td>
                      </tr>
                      <?php endif; ?>

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








      <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Tipe Paket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/tipepaket/store">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <input type="text" class="form-control" name="nametipe" placeholder="Jenis Laundry...">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-btn-secondary" data-dismiss="modal"><i class="fa-solid fa-backward-step"></i>Close</button>
                <button type="submit" class="btn-btn-primary">Save Change</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php $__currentLoopData = $tipepaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalEditUser<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Tipe Paket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/tipepaket/<?php echo e($d->id); ?>/update">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <input type="hidden" value="<?php echo e($d->id); ?>" name="id" required>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <input type="text" value="<?php echo e($d->nametipe); ?>" class="form-control" name="nametipe">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-btn-secondary" data-dismiss="modal"><i class="fa-solid fa-backward-step"></i>Close</button>
                <button type="submit" class="btn-btn-primary">Save Change</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $tipepaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalHapusUser<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Tipe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/tipepaket/<?php echo e($t->id); ?>/destroy">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <input type="hidden" value="<?php echo e($t->id); ?>" name="id" required>
                <div class="form-group">
                  <h4>Yakin Ingin Menghapus data ini?.Ini Akan Menghapus Bagian Tipe Paket Juga</h4>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-btn-secondary" data-dismiss="modal"><i class="fa-solid fa-backward-step"></i>Close</button>
                <button type="submit" class="btn-btn-danger"><i class="fa-solid fa-user-xmark" style="color: #fff;"></i>Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<!-- modaldetail
<script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var namecustomer = $(this).data('namecustomer');
      var nametipe = $(this).data('nametipe');
      $('#namecustomer').text(namecustomer);
      $('#nametipe').text(nametipe);
    })
  })
</script> -->
<script type="text/javascript">
  window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  })
</script>
<script>
  $('.delete').click(function() {
    var TipePaketid = $(this).attr('data-id');
    var nametipe = $(this).attr('data-nama');
    swal({
        title: "Yakin Nih?",
        text: "Ingin Menghapus Data Dengan Nama " + nametipe + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletetipe/" + TipePaketid + ""
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
  toastr.success("<?php echo e(Session('success')); ?>")
</script>
<?php endif; ?>

</html><?php /**PATH D:\laravel\laundry\resources\views/admin/master/tipepaket/datatipepaket.blade.php ENDPATH**/ ?>