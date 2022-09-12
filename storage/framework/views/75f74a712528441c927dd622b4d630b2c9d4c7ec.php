<div class="row" ng-app="app" ng-controller="trxController">
  <div class="col-md-12">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Data Transaksi</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered" id="konten" width="100%">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th class="text-center">Kode Pemesanan</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Tanggal Ambil</th>
              <th class="text-center">Tanggal Antar</th>
              <th class="text-center">Jenis</th>
              <th class="text-center">Berat (Kg)</th>
              <th class="text-center">Jumlah</th>
              <th class="text-center">Bayar</th>
              <th class="text-center">Total Bayar</th>
            </tr>
          </thead>
          <tbody ng-repeat="trx in datas">
            <tr>
              <td>1</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr ng-repeat="detail in trx.detail">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
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
    .controller('trxController', function ($scope, $http) {
      $scope.datas = [];
      $scope.model = {};
      $scope.model.jenis = [];
      $scope.model.tgl_ambil = new Date();
      $scope.model.total = 0;
      $scope.tombol = "Simpan"
      $scope.cetak = false;
      $scope.dataprint = {};
      $http({
        method: 'get',
        url: 'member/transaksi/gettransaksi',
      }).then(response => {
        $scope.datas = response.data;
        angular.forEach($scope.datas.transaksi, value => {
          var tgl = value.tgl_ambil.split('-');
          value.tanggal = new Date(tgl[0], tgl[1] - 1, tgl[2]);
          value.tanggal = convertanggal(value.tanggal)
        })
        console.log($scope.datas);
      })
    })
</script><?php /**PATH D:\laravel\laundry\resources\views/transaksi.blade.php ENDPATH**/ ?>