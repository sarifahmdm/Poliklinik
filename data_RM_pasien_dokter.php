<!DOCTYPE html>
<html>
<?php
include  'connection.php';
include  'build/head.php';
include  'build/menu_dokter.php';
?>

<div class="content-wrapper">
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dokter</a></li>
      <li class="active">Riwayat Pasien</li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="card">

      <!-- /.card-header -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="card">
              <div class="box-body">
                <span><h2>Riwayat Pasien</h2></span>
              </div>
              <!-- /.card-header -->
              <div class=" box-body">
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Pasien</th>
                      <th>NIK</th>
                      <th>Jumlah Kedatangan</th>
                      <th>Terakhir Kedatangan</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                          $no = 1;
                          if (isset($_GET['cari_nik'])) {
                            $cari = $_GET['cari_nik'];
                            $select_rekam_medis = "SELECT * FROM `pasien` WHERE nik
                            LIKE '%".$cari."%'";
                          } elseif (isset($_GET['cari_nama'])) {
                            $cari = $_GET['cari_nama'];
                            $select_rekam_medis = "SELECT * FROM `pasien` WHERE nama_pasien
                            LIKE '%".$cari."%'";
                          } else {
                            $select_rekam_medis = "SELECT * FROM `pasien` WHERE 1  ORDER BY id_pasien DESC";
                          }
                          error_reporting(0);
                          $query_select_RM = mysqli_query($conn, $select_rekam_medis);
                          while ($data_RM = mysqli_fetch_array($query_select_RM)) {
                            $nama_pasien = $data_RM['nama_pasien'];
                            $no_rekam_medis = $data_RM['no_rekam_medis'];
                            $nik = $data_RM['nik'];
                            echo "
                            <tr>
                            <td>$no</td>
                            <td>$nama_pasien</td>
                            <td>$nik</td>";
                            $select_diagnosa = "SELECT * FROM `diagnosa` WHERE no_rekam_medis =$no_rekam_medis";
                            $query_diagnosa =mysqli_query($conn, $select_diagnosa);
                            $sum_diag = 0;
                            while ($data_dagnosa=mysqli_fetch_array($query_diagnosa)) {
                              $sum_diag = $sum_diag +1;
                              $terakhir_datang = $data_dagnosa['tanggal_periksa'];
                            }
                            if ($sum_diag == 0) {
                              $terakhir_datang= "Belum Pernah Datang";
                            }
                            echo "<td>$sum_diag</td>";
                            echo "<td>$terakhir_datang</td>";
                            echo "
                            <td>
                              <a href='tabel_RM.php?no_rekam_medis=$no_rekam_medis'>
                                <span type='submit' class='badge bg-orange'>Lihat</span></a>
                            </td>
                            </tr>
                            ";
                            $no = $no+1;
                          }

                       ?>
                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <script src="bower_components/datatables/jquery.dataTables.min.js"></script>
              <script src="bower_components/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
              <script src="bower_components/datatables-responsive/js/dataTables.responsive.min.js"></script>
              <script src="bower_components/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
              <script>
                $(function () {
                  $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                  });
                  $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
              </script>
              </div>

          </div>
        </div>
      </div>
</div>
