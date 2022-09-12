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
              <h1 class="m-0" style="font-weight: 600;">Data User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Data User</li>
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
                  <h3 class="card-title">Tabel User</h3>
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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th colspan="2" style="text-align:center ;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      ?>
                      <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($m->name); ?></td>
                        <td><?php echo e($m->email); ?></td>
                        <td><?php echo e($m->level); ?></td>
                        <td align="center">
                          <a href="#modalEditUser<?php echo e($m->id); ?>" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa-solid fa-pen-to-square"></i></a>
                          |
                          <a href="#modalHapusUser<?php echo e($m->id); ?>" data-toggle="modal" data-id="<?php echo e($m->id); ?>" data-nama="<?php echo e($m->name); ?>" class="btn btn-danger btn-xs"><i class="fa-solid fa-user-xmark"></i></a>
                          |
                          <a id="set_dtl" href="#" data-toggle="modal" data-target="#modal-detail" data-name="<?php echo e($m->name); ?>" data-email="<?php echo e($m->email); ?>" data-level="<?php echo e($m->level); ?>" style="color: #fff;" title="Detail" class="btn btn-warning btn-xs">Info</a>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td align="center" colspan="5">Tidak Ada Data</td>
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

      <div class="modal fade" id="modal-detail">
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
                    <th>Nama</th>
                    <td><span id="name"></span></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><span id="email"></span></td>
                  </tr>
                  <tr>
                    <th>Level</th>
                    <td><span id="level"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/user/store">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="name" placeholder="Nama Lengkap...">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email...">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password...">
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level" required>
                    <option value="" hidden="">-- Pilih Level --</option>
                    <option value="admin">admin</option>
                    <option value="customer">customer</option>
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

      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalEditUser<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/user/<?php echo e($d->id); ?>/update">
              <?php echo csrf_field(); ?>
              <div class="modal-body">
                <input type="hidden" value="<?php echo e($d->id); ?>" name="id" required>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" value="<?php echo e($d->name); ?>" class="form-control" name="name" placeholder="Nama Lengkap...">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" value="<?php echo e($d->email); ?>" class="form-control" name="email" placeholder="Email...">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" value="<?php echo e($d->password); ?>" class="form-control" name="password" placeholder="Password...">
                </div>
                <div class="form-group">
                  <label>Level</label>
                  <select class="form-control" name="level" required>
                    <option value="" hidden="">-- Pilih Level --</option>
                    <option value="admin">admin</option>
                    <option <?php if ($d['level'] == "admin") echo "selected"; ?> value="admin">admin</option>
                    <option <?php if ($d['level'] == "customer") echo "selected"; ?> value="customer">customer</option>

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
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="modalHapusUser<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/user/<?php echo e($t->id); ?>/destroy">
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
<script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var name = $(this).data('name');
      var email = $(this).data('email');
      var level = $(this).data('level');
      $('#name').text(name);
      $('#email').text(email);
      $('#level').text(level);
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
    var userid = $(this).attr('data-id');
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
          window.location = "/deleteuser/" + userid + ""
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

</html><?php /**PATH D:\laravel\laundry\resources\views/admin/master/user/user.blade.php ENDPATH**/ ?>