
  <div class="box-body">
    <span><h2><b><font color="green">E. Edukasi</font></b></h2></span>
  </div>
  <section class="content">
    <div >
      <form class="form-horizontal" method="post" action="proses_edukasi.php?jenis_poli=<?php echo "$jenis_poli"; ?>">
        <div class="box-body">
          <div class="form-group" >
          </div>
          <span><h3><b><font>Edukasi</font></b></h3></span>
          <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa";?>">
          <textarea name="edukasi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
        <button type="submit" class="btn btn-info pull-right">Selanjutnya</button>
        <br><br>
      </form>
    </div>
  </section>
