<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundry | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="laundry.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li class="active"><a href="laundry.html">Home</a></li>
                                    <li><a href="/orderlaundry">Order Laundry</a></li>
                                    <li><a href="/transaksi">Transaksi</a></li>
                                    <li><a href="/blog">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="/blog">Blog</a></li>
                                            <li><a href="/blog_details">Blog Details</a></li>
                                            <li><a href="/elements">Element</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="../assets/img/icon/call.png" alt=""> (08) 728 256 266</a>
                    <a href="#" class="header-btn2">Make an Appointment</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
    <div ng-app="app" ng-controller="pemesananController">
  <div class="row d-flex flex-row-reverse" style="margin-bottom:12px;">
    <a href="" class="button" data-toggle="modal" data-target="#modal-warning" ng-click="itemPesanan=[]">Boking</a>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Data Pemesanan</h3>
        </div>
        <div class="card-body">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Proses</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Selesai</a>
              <a class="nav-item nav-link" id="nav-batal-tab" data-toggle="tab" href="#nav-batal" role="tab" aria-controls="nav-profile" aria-selected="false">Batal</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <table class="table table-bordered">
                <thead  class="bg-secondary">
                  <tr>
                    <th>Kode Pemesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status</th>
                    <th  style="width: 15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="item in datas.data.data">
                        
                      <td>
                        <div class="tombol">
                            <bottom class="btn btn-danger hapusboking"><ion-icon name="trash-outline"></ion-icon></bottom>
                            <bottom class="btn btn-warning"><i class="fas fa-edit" ng-click="setDetail(item)"></i></bottom>
                        </div>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <table class="table table-bordered">
                  <thead class="bg-info">
                    <tr>
                      <th>Kode Pemesanan</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr ng-repeat="item in datas.data.selesai">
                      
                      <td><bottom class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#detail" ng-click="itemPesanan=item.detail"></i></bottom></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-batal" role="tabpanel" aria-labelledby="nav-batal-tab">
            <table class="table table-bordered">
                  <thead class="bg-danger">
                    <tr>
                      <th>Kode Pemesanan</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr ng-repeat="item in datas.data.batal">
                        
                        <td><bottom class="btn btn-warning"><i class="fas fa-edit" data-toggle="modal" data-target="#detail" ng-click="itemPesanan=item.detail"></i></bottom></td>
                      </tr>
                  </tbody>
                </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-warning">
    <div class="modal-dialog">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h4 class="modal-title">Data Pesanan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="jenispakaian" class="col-sm-4 col-form-label">Jenis Pakaian</label>
                  <div class="col-sm-8">
                    <select class="form-control" ng-options="item as item.jenis for item in datas.jenis" name="idjenispakaian" ng-model="jenis" ng-change="model.jenis=jenis.jenis;model.idjenispakaian= jenis.idjenispakaian" id="jenispakaian">
                      <option></option>                      
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jumlah" class="col-sm-4 col-form-label">Jumlah Pakaian</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" name="jumlah" id="jumlah" ng-model="model.jumlah">
                  </div>
                </div>
                <div class="form-group row">
                  <button type="button" class="btn btn-info" ng-click="add()">Tambah</button>
                </div>
              </form>
            </div>
            <table class="table table-sm table-bordered">
              <thead>
                <tr>
                  <th>Jenis Pakaian</th>
                  <th>Jumlah Potong</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat = "item in itemPesanan">
                  
                </tr>
              </tbody>
            </table>
          </div>
          
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-outline-dark" ng-click="simpan()">Simpan</button>
            </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <div class="modal fade" id="detail">
    <div class="modal-dialog">
      <div class="modal-content bg-default">
        <div class="modal-header">
          <h4 class="modal-title">Detail Pesanan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          
          <div class="card-body">
            <table class="table table-sm table-bordered">
              <thead>
                <tr>
                  <th>Jenis Pakaian</th>
                  <th>Jumlah Potong</th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat = "item in itemPesanan">
                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Tutup</button>
            </div>
        
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>
<script>
$(function () {
    $(document).ready(function () {
      var tombol;
      var kd_pegawai;
      var nama_pegawai;
      var bagian;
      // if(document.getElementById("kd_pegawai").value == ""){
      //   $('.prosess').val('Simpan');
      // }else{
      //   $('.prosess').val('Ubah');
      // }
        // get Delete Product
        $('.hapusboking').on('click', function () {
            // get data from button edit
            const Url = $(this).data('url');
            // Set data to Form Edit
            // $('.edit-kategori').val(idkategori);
            swal({
                title: "Anda Yakin?",
                text: "Akan Melakukan Pembatalan?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'DELETE',
                            url: Url,
                            success: function (data) {
                                swal("Information!", "Berhasil di Hapus", "success")
                                    .then((value) => {
                                        location.reload();
                                    });
                            }
                        });
                    }
                });
        });
    });
})
angular.module('app', [])
    .directive('format', ['$filter', function ($filter) {
      return {
        require: '?ngModel',
        link: function (scope, elem, attrs, ctrl) {
          if (!ctrl) return;

          ctrl.$formatters.unshift(function (a) {
            return $filter(attrs.format)(ctrl.$modelValue, attrs.format == 'currency' ? '' : null)
          });

          elem.bind('blur', function (event) {
            var plainNumber = elem.val().replace(/[^\d|\-+|\.+]/g, '');
            elem.val($filter(attrs.format)(plainNumber));
          });
        }
      };
    }])
    .controller('pemesananController', function ($scope, $http) {
      $scope.datas = [];
      $scope.model = {};
      $scope.model.jenis = [];
      $scope.model.tgl_ambil = new Date();
      $scope.model.total = 0;
      $scope.tombol = "Simpan"
      $scope.cetak = false;
      $scope.itemPesanan = [];
      $scope.jenis = {};
      $scope.dataprint = {};
      $http({
        method: 'get',
        url: 'member/pemesanan/getData',
      }).then(response => {
        $scope.datas = response.data;
      })
      $scope.simpan =()=>{
        $http({
        method: 'POST',
        url: 'member/pemesanan/simpan',
        data: $scope.itemPesanan
      }).then(response => {
        location.reload();
      })
      }
      $scope.add = ()=>{
        $scope.itemPesanan.push(angular.copy($scope.model))
        $scope.model = {};
        $scope.jenis = {};
      }

      $scope.setDetail= (item)=>{
        $scope.itemPesanan = item.detail;
        $('#detail').modal('show');
      }
    })
</script>
        
<!-- footer-bottom area -->
<div class="footer-bottom-area section-bg2" data-background="../assets/img/gallery/footer-bg.png">
    <div class="container">
        <div class="footer-border">
           <div class="row d-flex align-items-center">
               <div class="col-xl-12 ">
                   <div class="footer-copy-right text-center">
                       <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/animated.headline.js"></script>
<script src="../assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="../assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="../assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.countdown.min.js"></script>
<script src="../assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/jquery.form.js"></script>
<script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/mail-script.js"></script>
<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

</body>
</html><?php /**PATH D:\laravel\laundry\resources\views/order.blade.php ENDPATH**/ ?>