<span><h3><b><font>Terapi</font></b></h3></span>
<?php

    $select_resep = "SELECT * FROM `resep` WHERE id_diagnosa = '$id_diagnosa'";
    $query_select_resep = mysqli_query ($conn, $select_resep);
    $num = 0;
    error_reporting(0);
    while ($data_resep = mysqli_fetch_array($query_select_resep)) {
      $num = $num+1;

    }
 ?>
<form class="form" method="post" action="proses_resep.php?jenis_poli=<?php echo "$jenis_poli"; ?>">
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th style='width: 30%;'>Jenis Obat</th>
            <th>Jumlah</th>
            <th>Aturan Pemakaian</th>
            <th>Aksi</th>
          </tr>
          <?php if ($num == 0){
            $num = $num + 1;
            echo "<tr>";
            echo "<td>$num</td>";?>
            <td style='width: 30%;'>
            <div class='form-group col-sm-10'>
            <select class='form-control select2' style='width: 100%;' name='kode_obat'>
              <option></option>
             <?php
                        $select_obat = "SELECT * FROM `obat` WHERE 1";
                        $query_obat = mysqli_query($conn, $select_obat);
                        while ($data_obat = mysqli_fetch_array($query_obat)) {
                          $kode_obat = $data_obat [ 'kode_obat'];
                          $nama_obat = $data_obat['nama_obat'];
                          echo "<option value = '$kode_obat'> $nama_obat</option>";
                        }

              echo "</td></select>";
              echo "</div>";
              echo "</div>";
              echo "<div class='col-sm-10'>";
              echo "<div class='form-group'>";
              echo "<td>
                      <input type='number' name='jumlah'/>
                      </td>
                      <td>
                      <div class='col-xs-9'>
                        <table>
                          <th>S</th>
                          <th><input type='int' class='form-control' name='pagi'/></th>
                          <th>-</th>
                          <th><input type='int' class='form-control' name='siang'/></th>
                          <th>-</th>
                          <th><input type='int' class='form-control' name='malam'/></th>
                        </table>
                       </div>
                       </td>
                      <input type='hidden' name='id_diagnosa' value='$id_diagnosa'/>";
              echo "</div>";
              echo "</div>";
              echo "<td><button type='submit' class='btn btn-info pull-right'>Tambah</button></td>";
              echo "</tr>";
          } elseif ($num > 0){
            while ($num > 0) {
              $num = $num + 1;
              $select_resep_baca = "SELECT * FROM `resep` WHERE id_diagnosa = '$id_diagnosa'";
              $query_select_resep_baca = mysqli_query ($conn, $select_resep_baca);
              $num = 0;
              while ($data_resep_baca = mysqli_fetch_array($query_select_resep_baca)) {
                $num = $num + 1;
                $id_resep = $data_resep_baca['id_resep'];
                $kode_obat_baca = $data_resep_baca['kode_obat'];
                $select_obat_baca = "SELECT nama_obat FROM `obat` WHERE kode_obat = '$kode_obat_baca'";
                $query_obat_baca = mysqli_query($conn, $select_obat_baca);
                $data_obat_baca = mysqli_fetch_array($query_obat_baca);
                $nama_obat_baca = $data_obat_baca['nama_obat'];
                $jumlah = $data_resep_baca['jumlah'];
                $aturan_pemekaian = $data_resep_baca['aturan_pemakaian'];
                echo "<tr>";
                echo "<td>$num</td>";
                echo "<td>$nama_obat_baca</td>";
                echo "<td>$jumlah</td>";
                echo "<td>$aturan_pemekaian</td>";
                echo "<td>
                <a  href ='hapus_obat_resep.php?id_diagnosa=$id_diagnosa && id_resep=$id_resep && jenis_poli=$jenis_poli'
                class='btn btn-warning pull-right'>Hapus</a><td>";
                echo "</tr>";
              }
              break;
            }
            $num = $num + 1;
            echo "<tr>";
            echo "<td>$num</td>";
            echo "<td>"; ?>
            <select class='form-control select2' style='width: 100%;' name='kode_obat'>
              <option></option>
             <?php
                        $select_obat = "SELECT * FROM `obat` WHERE 1";
                        $query_obat = mysqli_query($conn, $select_obat);
                        while ($data_obat = mysqli_fetch_array($query_obat)) {
                          $kode_obat = $data_obat [ 'kode_obat'];
                          $nama_obat = $data_obat['nama_obat'];
                          echo "<option value = '$kode_obat'> $nama_obat</option>";
                        }

              echo "</td>
                    </select>";
              echo "<td>
                      <input type='int' name='jumlah'/>
                    </td>
                    <td>
                    <div class='col-xs-9'>
                    <table>
                    <th>S</th>
                    <th><input type='int' class='form-control' name='pagi'/></th>
                    <th>-</th>
                    <th><input type='int' class='form-control' name='siang'/></th>
                    <th>-</th>
                    <th><input type='int' class='form-control' name='malam'/></th>
                    </table>
                    </div>
                    </td>
                    <input type='hidden' name='id_diagnosa' value='$id_diagnosa'/>";
              echo "<td>";
                echo "<button type='submit' class='btn btn-info pull-right'>Tambah</button></td>";
              echo "</tr>";
            } ?>

        </table>
      </div>
</form>
