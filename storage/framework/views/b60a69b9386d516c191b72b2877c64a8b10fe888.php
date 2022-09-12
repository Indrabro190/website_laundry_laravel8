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
                            <h1 class="m-0">Data Customer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                                <li class="breadcrumb-item active">Data Customer</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container">
                <div class="card">
                    <div class="card-header bg-secondary" style="color:#fff ; font-weight: 900; padding-left: 10px;">Data Customer</div>
                    <div class="card-body" style="box-shadow: 1px 5px 10px black;">
                        <form class="row gx-3 gy-2 align-items-center" action="/updatedatacustomer/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-sm-3 mb-4">
                                <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Nama :</label>
                                <input type="text" name="nama" class="form-control" id="specificSizeInputName" placeholder="Masukkan Nama..." value="<?php echo e($data->nama); ?>" required>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Alamat :</label>
                                <input type="text" name="alamat" class="form-control" id="specificSizeInputName" placeholder="alamat..." value="<?php echo e($data->alamat); ?>" required>
                            </div>
                            <div class="col-sm-3 mb-4">
                                <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">Jenis Kelamin :</label>
                                <input type="text" name="jeniskelamin" class="form-control" id="exampleInputPassword1" value="<?php echo e($data->jeniskelamin); ?>" required>
                            </div>

                            <div class="col-sm-3 mb-4">
                                <label class="small mb-1" style="font-weight: 400; color:black; text-shadow:1px 1px 1px #6E6E6E;">No Telepon :</label>
                                <input type="number" name="notelepon" class="form-control" id="specificSizeInputName" placeholder="No Telepon..." value="<?php echo e($data->notelepon); ?>" required>
                            </div>

                            <div class="submit" style="margin-left: 30px;">
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
<!-- modaldetail -->


</html><?php /**PATH D:\laravel\laundry\resources\views/tampilkandatacustomer.blade.php ENDPATH**/ ?>