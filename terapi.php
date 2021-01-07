
  <div class="box-body">
    <span><h2><b><font color="green">D. Terapi</font></b></h2></span>
  </div>

  <section class="content">
    <!-- Main row -->
    <div >
            <!-- form start -->
            <?php include 'terapi_obat.php'; ?>
            <form class="form-horizontal" method="get" action="proses_tindakan.php">
              <div class="box-body">
              <span><h3><b><font>Tindakan</font></b></h3></span>
              <table class="table table-bordered ">
                <tr>
                  <th>Nama Tindakan</th>
                  <th>Aksi</th>
                </tr>
                <?php
                if ($jenis_poli=="Poli Kia") {
                  $jenis_tindakan = "KIA";
                } elseif ($jenis_poli=="Poli Umum") {
                  $jenis_tindakan = "POLI UMUM";
                } elseif ($jenis_poli=="Poli Gigi") {
                  $jenis_tindakan ="POLI GIGI";
                }
                 $select_tindakan = "SELECT * FROM `tindakan` WHERE jenis_tindakan = '$jenis_tindakan'";
                 $query_select_tindakan = mysqli_query($conn, $select_tindakan);
                 while ($data_tindakan = mysqli_fetch_array($query_select_tindakan)) {
                   $nama_tindakan = $data_tindakan['nama_tindakan'];
                   $id_tindakan = $data_tindakan['id_tindakan'];
                   echo "
                   <tr>
                    <td>$nama_tindakan</td>
                    <td><input name='$id_tindakan' type='checkbox'></td>
                   </tr>
                   ";
                 }


                echo "<input type='hidden' name='id_diagnosa' value='$id_diagnosa'/>";
                echo "<input type='hidden' name='jenis_poli' value='$jenis_poli'/>";
                 ?>

              </table>
              </div>
              <button type="submit" class="btn btn-info pull-right">Selanjutnya</button>
              <br><br>
            </form>
          </div>
  </section>
