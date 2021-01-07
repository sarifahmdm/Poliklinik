
  <div class="box-body">
    <span><h2><b><font color="green">B. Pemeriksaan Penunjang</font></b></h2></span>
  </div>
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-10">
        <div>
          <!-- Horizontal Form -->
          <div >
            <!-- form start -->
            <form method="post" action="proses_modal_pemeriksaan_penunjang.php?jenis_poli=<?php echo "$jenis_poli"; ?>" class="form-horizontal">
              <input type="hidden" name="id_diagnosa" value="<?php echo $id_diagnosa; ?>"/>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-10">
                    <h3><input type="radio" name="pemeriksaan_penunjang" value="1"
                    data-toggle="modal" data-target="#myModal"> Perlu Pemeriksaan</input></h3>
                    <?php include 'build/modal_pemeriksaan_penunjang.php'; ?>
                    <h3><input type="radio" name="pemeriksaan_penunjang" value="0"> Tidak Perlu Pemeriksaan<br></h3>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-info" data-dismiss="modal"
              data-toggle="modal" data-target="#myModal1">Lihat Hasil Lab</button>
              <br><br>
              <a href="diagnosa_c.php?id_diagnosa=<?php echo $id_diagnosa; ?> && jenis_poli=<?php echo "$jenis_poli"; ?>">
                <span class="btn btn-info pull-right">Selanjutnya</span></a>
              <br><br>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <?php
  include 'build/modal_hasil_pemeriksaan_penunjang.php';
  ?>
