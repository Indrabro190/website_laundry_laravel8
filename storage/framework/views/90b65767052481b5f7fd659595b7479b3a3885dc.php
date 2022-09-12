<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ubah Data</title>
</head>

<body>
    <h1 class="text-center mb-4" style="font-weight: 800;">Ubah Data</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedatacustomer/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Input Name</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?php echo e($data->nama); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Input Address</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?php echo e($data->alamat); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gender</label>
                            <input type="text" name="status_perkawinan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e($data->jeniskelamin); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Telefon</label>
                            <input type="number" name="notelepon" class="form-control" id="exampleInputPassword1" value="0<?php echo e($data->notelepon); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php echo e($data->email); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH D:\laravel\laundry\resources\views/customer/tampilkandatacustomer.blade.php ENDPATH**/ ?>