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
              <h1 class="m-0" style="font-weight: 600;">Data Paket</h1>
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
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Proses</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Selesai</a>
                    <a class="nav-item nav-link" id="nav-batal-tab" data-toggle="tab" href="#nav-batal" role="tab" aria-controls="nav-profile" aria-selected="false">Batal</a>
                  </div>
                </nav>
                <div class="card-header">
                  <h3 class="card-title">Tabel Paket</h3>
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
                      <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Tipe Paket</th>
                        <th colspan="2" style="text-align:center ;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__empty_1 = true; $__currentLoopData = $namapaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($m->namepaket); ?></td>
                        <td><?php echo e($m->tipepaket->nametipe); ?></td>
                        <td align="center">
                          <a href="#modalEditUser<?php echo e($m->id); ?>" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa-solid fa-pen-to-square"></i></a>
                          |
                          <a href="/deletepaket<?php echo e($m->id); ?>}" data-toggle="modal" data-id="<?php echo e($m->id); ?>" data-namepaket="<?php echo e($m->namepaket); ?>" class="btn btn-danger btn-xs delete"><i class="fa-solid fa-user-xmark"></i></a>
                          <!-- |
                          <a id="set_dtl" href="/deletepaket/<?php echo e($m->id); ?>" data-toggle="modal" data-target="#modal-detail" data-namecustomer="<?php echo e($m->namecustomer); ?>" data-alamat="<?php echo e($m->alamat); ?>" data-jeniskelamin="<?php echo e($m->jeniskelamin); ?>" data-notelepon="0<?php echo e($m->notelepon); ?>" style="color: #fff;" title="Detail" class="btn btn-warning btn-xs">Info</a> -->
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td align="center" colspan="4">Tidak Ada Data</td>
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

      <!-- detail -->
      <!-- <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="clode" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title">Detail User</h4>
            </div>
            <div class="modal-body table-responsive">
              <table class="table table-bordered no-margin">
                <tbody>
                  <tr>
                    <th>Nama Paket</th>
                    <td><span id="name"></span></td>
                  </tr>
                  <tr>
                    <th>Tipe Paket</th>
                    <td><span id=""></span></td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td><span id="level"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> -->
      <!-- end detail -->

      <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Paket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/paket/store">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Paket</label>
                  <input type="text" class="form-control" name="namepaket" placeholder="Nama Paket...">
                </div>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <select class="form-control" name="tipepaket_id" required>
                    <?php $__empty_1 = true; $__currentLoopData = $tipepaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <option value="" hidden="">-- Pilih --</option>
                    <option value="<?php echo e($value->id); ?>"><?php echo e($value->nametipe); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                  </select>
                  
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

      <?php $__currentLoopData = $namapaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalEditUser<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Paket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/paket/<?php echo e($d->id); ?>/update">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                
                <div class="form-group">
                  <label>Nama Paket</label>
                  <input type="text" value="<?php echo e($d->namepaket); ?>" class="form-control" name="namepaket" placeholder="Nama Paket...">
                </div>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <?php $__currentLoopData = $tipepaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <input type="text" value="<?php echo e($d->nametipe); ?>" name="tipepaket_id" class="form-control">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

      <?php $__currentLoopData = $namapaket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalHapusUser<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/paket/<?php echo e($t->id); ?>/destroy">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <input type="hidden" value="<?php echo e($t->id); ?>" name="id" required>
                <div class="form-group">
                  <h4>Apakah Anda Ingin Menghapus Data Ini</h4>
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
<!-- modaldetail -->
<!-- <script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var name = $(this).data('name');
      var tipepaket = $(this).data('$namapaket->tipepaket->name');
      var harga = $(this).data('Harga');
      $('#name').text(name);
      $('#tipepaket_id').text(tipepaket_id);
      $('#Harga').text(Harga);
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
    var NamaPaketid = $(this).attr('data-id');
    var namepaket = $(this).attr('data-namepaket');
    swal({
        title: "Yakin Nih?",
        text: "Ingin Menghapus Data Dengan Nama " + namepaket + " ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletepaket/" + NamaPaketid + ""
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

</html><?php /**PATH D:\laravel\laundry\resources\views/admin/master/namapaket/datapaket.blade.php ENDPATH**/ ?>