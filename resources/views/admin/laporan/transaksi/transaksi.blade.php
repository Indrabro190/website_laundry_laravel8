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
              <h1 class="m-0" style="font-weight: 600;">Data Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/laundry">Home</a></li>
                <li class="breadcrumb-item active">Data Transaksi</li>
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
                  <h3 class="card-title">Tabel Paket</h3>
                  <div class="submit" style="margin-left: 890px;">
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#modalAddUser"><i class="fa-solid fa-plus"></i></button>
                  </div>
                </div>
                <!-- /.card-header -->
                <!-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{ $message }}
                </div>
                @endif -->
                <div class="card-body">
                  <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th style="width: 150px">Cabang</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Paket</th>
                        <th class="text-center">Tanggal Selesai</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Berat (Kg)</th>
                        <th class="text-center">Bayar</th>
                        <th colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no = 1;
                      @endphp
                      @forelse($transaksi as $m)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->cabang->namecabang}}</td>
                        <td>{{$m->customer->namecustomer}}</td>
                        <td>{{$m->namapaket->namepaket}}</td>
                        <td>{{$m->tanggalselesai}}</td>
                        <td>{{$m->tipepaket->nametipe}}</td>
                        <td>{{$m->jumlah}}</td>
                        <td>{{$m->berat}}</td>
                        <td>{{$m->total_bayar}}</td>
                        <td>
                          <a href="#modalEditUser{{ $m->id }}" data-toggle="modal" class="btn btn-primary btn-xs"><i class="fa-solid fa-pen-to-square"></i></a>
                          |
                          <a href="#" data-toggle="modal" data-id="{{ $m->id }}" data-nama="{{ $m->customer->namecustomer }}" class="btn btn-danger btn-xs delete"><i class="fa-solid fa-user-xmark"></i></a>
                          |
                          <a id="set_dtl" href="#" data-toggle="modal" data-target="#modal-detail" data-namecustomer="{{ $m->namecustomer }}" data-alamat="{{ $m->alamat }}" data-jeniskelamin="{{ $m->jeniskelamin }}" data-notelepon="0{{ $m->notelepon }}" style="color: #fff;" title="Detail" class="btn btn-warning btn-xs">Info</a>
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td align="center" colspan="10">Tidak Ada Data</td>
                      </tr>
                      @endforelse

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
              <h5 class="modal-title" id="exampleModalLongTitle">Add Transaksi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/transaksi/store">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Cabang</label>
                  <select class="form-select" name="cabang_id" required>
                    <option value="" hidden=""></option>
                    @foreach($cabang as $value)
                    <option value="{{ $value->id }}">{{ $value->namecabang }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Customer</label>
                  <select class="form-select" name="customer_id" required>
                    <option value="" hidden=""></option>
                    @foreach($customer as $value)
                    <option value="{{ $value->id }}">{{ $value->namecustomer }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Paket</label>
                  <select class="form-select" name="namapaket_id" required>
                    <option value="" hidden=""></option>
                    @foreach($namapaket as $value)
                    <option value="{{ $value->id }}">{{ $value->namepaket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Selesai</label>
                  <input type="date" class="form-control" name="tanggalselesai">
                </div>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <select class="form-select" name="tipepaket_id" required>
                    <option value="" hidden=""></option>
                    @foreach($tipepaket as $value)
                    <option value="{{ $value->id }}">{{ $value->nametipe }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah Laundry</label>
                  <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="form-group">
                  <label>Berat</label>
                  <input type="number" class="form-control" name="berat">
                </div>
                <div class="form-group">
                  <label>Bayar</label>
                  <input type="number" class="form-control" name="total_bayar">
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

      @foreach($transaksi as $d)
      <div class="modal fade" id="modalEditUser{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data" action="/transaksi/{{ $d->id }}/update">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Cabang</label>
                  <select class="form-select" name="cabang_id" required>
                    @foreach($cabang as $cab)
                    <option value="{{ $cab->id }}" {{ $cab->id == $d->cabang_id ? 'selected' : '' }}>{{ $cab->namecabang }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Customer</label>
                  <select class="form-select" name="customer_id" required>
                    @foreach($customer as $cust)
                    <option value="{{ $cust->id }}" {{ $cust->id == $d->customer_id ? 'selected' : '' }}>{{ $cust->namecustomer }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Nama Paket</label>
                  <select class="form-select" name="namapaket_id" required>
                    @foreach($namapaket as $paket)
                    <option value="{{ $paket->id }}" {{ $paket->id == $d->namapaket_id ? 'selected' : '' }}>{{ $paket->namepaket }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  @foreach($transaksi as $d)
                  <label>Tanggal Selesai</label>
                  <input type="date" class="form-control" name="tanggalselesai" value="{{ $d->tanggalselesai}}">
                  @endforeach
                </div>
                <div class="form-group">
                  <label>Jenis Laundry</label>
                  <select class="form-select" name="tipepaket_id" required>
                    @foreach($tipepaket as $tipe)
                    <option value="{{ $tipe->id }}" {{ $tipe->id == $d->tipepaket_id ? 'selected' : '' }}>{{ $tipe->nametipe }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Jumlah Laundry</label>
                  @foreach($transaksi as $d)
                  <input type="number" value="{{ $d->jumlah }}"  class="form-control" name="jumlah"
                  @endforeach
                </div>
                <div class="form-group">
                  <label>Berat</label>
                  @foreach($transaksi as $d)
                  <input type="number" value="{{ $d->berat }}" class="form-control" name="berat">
                  @endforeach
                </div>
                <div class="form-group">
                  <label>Bayar</label>
                  @foreach($transaksi as $d)
                  <input type="number" value="{{ $d->total_bayar }}" class="form-control" name="total_bayar">
                  @endforeach
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
      @endforeach

      @foreach($transaksi as $t)
      <div class="modal fade" id="modalHapusUser{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/transaksi/{{ $t->id }}/destroy">
              @csrf
              <div class="modal-body">
                <input type="hidden" value="{{ $t->id }}" name="id" required>
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
      @endforeach

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
<!-- modaldetail -->
<!-- <script>
  $(document).ready(function() {
    $(document).on('click', '#set_dtl', function() {
      var name = $(this).data('name');
      var tipepaket = $(this).data('$transaksi->tipepaket->name');
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
    var deleteid = $(this).attr('data-id');
    var namecustomer = $(this).attr('data-nama');
    swal({
        title: "Yakin Nih?",
        text: "Ingin Menghapus Data Ini dengan nama " + namecustomer + " ? ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/delete/" + deleteid + " ",
            swal("Data Berhasil Di Hapus Bro", {
              icon: "success",
            });
        } else {
          swal("Data Kamu Masih Disimpan");
        }
      });
  });
</script>
@if(Session::has('success'))
<script>
  toastr.success("{{ Session('success') }}")
</script>
@endif

</html>