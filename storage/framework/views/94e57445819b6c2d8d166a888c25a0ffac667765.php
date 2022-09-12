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
              <h1 class="m-0">Data Pesanan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Data Pesanan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="container">
        <div class="card">
            <div class="card-header bg-secondary" style="color:#fff ; font-weight: 900; padding-left: 10px;">Data Pesanan</div>
            <div class="card-body" style="box-shadow: 1px 5px 10px black;">
                <form class="row gx-3 gy-2 align-items-center" action="/insertpesanan" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <!-- <div class="col-sm-3 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Kode Pemesanan :</label>
                        <select class="form-select" name="KODE_PEMESANAN" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="LYNPM0001">LYNPM0001</option>
                        </select>
                    </div> -->
                    <div class="col-sm-3 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Nama :</label>
                        <input type="text" name="NAMA" class="form-control" id="specificSizeInputName" placeholder="Masukkan Nama..." required>
                    </div>
                    <div class="col-sm-3 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Nama Paket :</label>
                        <select class="form-select" name="NAMA_PAKET" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="Paket Express">Paket Express</option>
                            <option value="Reguler">Reguler</option>
                            <option value="Paket Kiloan">Paket Kiloan</option>
                            <option value="Bed Cover">Bed Cover</option>
                            <option value="Paket">Paket</option>
                            <option value="Paket Selimut">Paket Selimut</option>
                        </select>
                    </div>

                    <div class="col-sm-3 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Jenis :</label>
                        <select class="form-select" name="JENIS" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="Kiloan">Kiloan</option>
                            <option value="Selimut">Selimut</option>
                            <option value="Bed Cover">Bed Cover</option>
                            <option value="Kaos">Kaos</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="col-sm-3 mb-4">
                        <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Harga :</label>
                        <input type="number" name="HARGA" class="form-control" id="specificSizeInputName" placeholder="Harga..." required>
                    </div>

                    <div class="submit" style="margin-left: 5px; letter-spacing:10px;">
                        <button type="close" class="btn btn-secondary"><a href="/datapesanan" style="color: #fff; text-decoration:none;">Back</a></button>
                        <button type="submit" class="btn btn-primary"><i style="color: #fff;">Submit</i></a></button>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
    </div>

      <div class="modal fade" id="modal-detail">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="clode" data-dismiss="modal" aria-label="Close">
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
                    <th>Alamat</th>
                    <td><span id="alamat"></span></td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td><span id="jeniskelamin"></span></td>
                  </tr>
                  <tr>
                    <th>No Telefon</th>
                    <td><span id="notelepon"></span></td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><span id="email"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
<!-- modaldetail -->
<script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var nama = $(this).data('nama');
      var alamat = $(this).data('alamat');
      var jeniskelamin = $(this).data('jeniskelamin');
      var notelepon = $(this).data('notelepon');
      var email = $(this).data('email');
      $('#nama').text(nama);
      $('#alamat').text(alamat);
      $('#jeniskelamin').text(jeniskelamin);
      $('#notelepon').text(notelepon);
      $('#email').text(email);
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
    var customerid = $(this).attr('data-id');
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
          window.location = "/deletecustomer/" + customerid + ""
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

</html><?php /**PATH D:\laravel\laundry\resources\views/tambahpesanan.blade.php ENDPATH**/ ?>