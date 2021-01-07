<!DOCTYPE html>
<html>
<?php
include  'build/head.php';
include 'connection.php';
include  'build/menu_manajer.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Manajer</a></li>
        <li class="active"></li>Statistik
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-10">
          <div class="box box-primary">
            <div class="box-body">
              <span><h2>Statistik Data Pasien</h2></span>
            </div>
            <!--data pasien -->
            <div >
              <form action="proses_statistik.php" method="post">
              <table class="table">
                <thead>
                  <th>Waktu</th>
                  <th>Pekerjaan</th>
                  <th>Umur</th>
                  <th>Jenis Penyakit</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Bulan</label>
                        <div class="col-sm-3">
                          <select name = "bulan">
                            <option value=%>....................</option>
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-3">
                          <select name = "tahun">
                            <option value=%>....................</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                          </select>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <select name = "pekerjaan">
                            <option value=%>....................</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Staf">Staf</option>
                            <option value="Pegawai">Pegawai</option>
                            <option value="PNS">PNS</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Petani">Petani</option>
                          </select>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <div class="col-sm-3">
                          <select name = "umur">
                            <option value=%>....................</option>
                            <option value="0-1">0-1 Tahun</option>
                            <option value="1-5">1-5 Tahun</option>
                            <option value="5-12">5-12 Tahun</option>
                            <option value="12-20">12-20 Tahun</option>
                            <option value="20-30">20-30 Tahun</option>
                            <option value="30-...">30-... Tahun</option>
                          </select>
                        </div>
                      </div>
                    </td>
                    <?php
                        $select_penyakit = "SELECT * FROM `penyakit` WHERE 1";
                        $query_penyakit = mysqli_query($conn, $select_penyakit);
                     ?>
                    <td>
                      <select name = "jenis_penyakit">
                        <option value = %>...................................</option>
                      <?php
                        while ($data_penyakit = mysqli_fetch_array($query_penyakit)) {
                          $jenis_penyakit = $data_penyakit ['nama_penyakit'];
                          echo "<option value = '$jenis_penyakit'>$jenis_penyakit</option>";
                        }
                       ?>
                      </select>
                    </td>
                    <td>
                      <button type="submit" class="badge bg-green">Lihat</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--end data pasien -->
            <!-- /.box-header -->
          </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->
