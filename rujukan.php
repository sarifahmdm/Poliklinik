
  <div class="box-body">
    <span><h2><b><font color="green">F. Rujukan</font></b></h2></span>
  </div>
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-10">
        <div>
          <!-- Horizontal Form -->
          <div >
            <form method="post" action="proses_rujukan.php?jenis_poli=<?php echo $jenis_poli?>" class="form-horizontal">
              <div class="box-body">
                <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa";?>">
                <input type="hidden" name="jenis_poli" value="<?php echo $jenis_poli; ?>"/>
                <div class="form-group">
                  <div class="col-sm-10">
                    <h3><input type="radio" name="rujuk" value="1"
                    data-toggle="modal" data-target="#myModal2"> Iya</button></h3>
                    <?php
                    include 'build/modal_rujukan.php';
                    ?>

                    <h3><input type="radio" name="rujuk" value="0"> Tidak</input><br></h3>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info pull-right">Selesai</button>
              <br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
