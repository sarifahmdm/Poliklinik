<nav class="navbar navbar-static-top">
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown user user-menu">
        <a href="diagnosa_a.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Pemeriksaan Fisik</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="diagnosa_b.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Pemeriksaan Penunjang</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="diagnosa_c.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Diagnosis</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="diagnosa_d.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Terapi</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="diagnosa_e.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Edukasi</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="diagnosa_f.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?>" >
          <span class="hidden-xs">Rujukan</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a href="tabel_RM_dokter.php?id_diagnosa=<?php echo "$id_diagnosa";?> && jenis_poli=<?php echo "$jenis_poli";?> && no_rekam_medis=<?php echo "$no_rekam_medis";?>" >
          <span class="badge bg-orange">Lihat Rekam Medis</span>
        </a>
      </li>
      <!-- Control Sidebar Toggle Button -->
    </ul>
  </div>
</nav>
<nav class="navbar navbar-static-top">
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown user user-menu">
        <a data-dismiss="modal" data-toggle="modal" data-target="#myModalDataPasien">
          <span class="badge bg-blue">Data Pasien</span>
        </a>
      </li>
      <li class="dropdown user user-menu">
        <a data-dismiss="modal" data-toggle="modal" data-target="#myModalPengkajianAwal">
          <span class="badge bg-blue">Pengkajian Awal</span>
        </a>
      </li>
      <!-- Control Sidebar Toggle Button -->
    </ul>
  </div>
</nav>

<?php
include 'build/modal_pengkajian_awal.php';
include 'build/modal_data_pasien_dokter.php';
?>
