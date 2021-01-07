<!DOCTYPE html>
<html>
<?php
include  'connection.php';
include  'build/head.php';
include  'build/menu_admin.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Input Pasien Lama</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div >
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <span><h2>Form input pasien Lama</h2></span>
            </div>
            <section class="content">
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                  <div>
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">
                          <div>
                            <div class="box-header with-border">
                            </div>
                            <!-- /.box-header -->
                            <!-- Horizontal Form -->
                            <div >
                              <!-- /.box-header -->
                              <!-- form start -->
                              <form class="form-horizontal" method="post" action="proses_form_pasien_lama.php">
                                <div class="box-body">
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">No RM</label>
                                    <div class="col-sm-8">
                                      <input type="text" name = "no_rm" class="form-control" placeholder="Nomor Rekam Medis">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">NIK</label>
                                    <div class="col-sm-8">
                                      <input type="number" name = "no_induk" class="form-control" placeholder="Nomor Induk Keluarga">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                      <input type="text" name = "nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                      <input type="date" name = "tanggal_lahir">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat Rumah</label>
                                    <div class="col-sm-8">
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                  				<select class="form-control select2" name="provinsi" id="provinsi">
                                  					<option value=""> Pilih Provinsi</option>
                                  				</select>
                                  			</div>

                                  			<div class="form-group">
                                  				<select class="form-control select2" name="kabupaten" id="kabupaten">
                                  				</select>
                                  			</div>

                                  			<div class="form-group">
                                  				<select class="form-control select2" name="kecamatan" id="kecamatan">
                                  				</select>
                                  			</div>

                                  			<div class="form-group">
                                  				<select class="form-control select2" name="kelurahan" id="kelurahan">
                                  				</select>
                                  			</div>
                                        <div class="form-group">
                                  				<input type="number" name = "kode_pos" class="form-control" placeholder="Kode Pos">
                                  			</div>

                                  		</div>
                                      <br>
                                      <div class="col-sm-13">
                                        <input type="text" name = "alamat_lengkap" class="form-control" placeholder="Alamat Lengkap">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "jenis_kelamin">
                                        <option value=null></option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Suku / Bangsa</label>
                                    <div class="col-sm-3">
                                      <input type="text" name = "suku_bangsa" class="form-control" placeholder="Suku / Bangsa">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Agama</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "agama">
                                        <option value=null></option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen">Kristen</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "pekerjaan">
                                        <option value=null></option>
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

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Nomor Telepon</label>
                                    <div class="col-sm-3">
                                      <input type="number" name = "no_telpon" class="form-control" value="62">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Golongan Darah</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "golongan_darah">
                                        <option value=null></option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Pendidikan</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "pendidikan">
                                        <option value=null></option>
                                        <option value="null">Tidak Sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA/SMK">SMA/SMK</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Status Perkawinan</label>
                                    <div class="col-sm-3">
                                      <select class="form-control select2" name = "status_perkawinan">
                                        <option value=null></option>
                                        <option value = "Belum Menikah">Belum Menikah</option>
                                        <option value = "Menikah">Menikah</option>
                                        <option value = "Berpisah">Berpisah</option>
                                        <option value = "Cerai Mati">Cerai Mati</option>
                                      </select>
                                    </div>
                                    <br><br>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Jenis Pembiayaan</label>
                                      <div class="col-sm-3">
                                          <input type="radio" name="jenis_pembiayaan" value = "Umum">Umum</option>
                                          <input type="radio" name="jenis_pembiayaan" data-dismiss="modal" data-toggle="modal"
                                          data-target="#myModal" value = "Asuransi">Asuransi</option>
                                        </select>
                                      </div>
                                      <?php
                                      include  'build/modal_jenis_asuransi.php';
                                      ?>
                                    <div class="box-footer">
                                      <button type="submit" class="btn btn-info pull-right">Save</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                            </div>
                          </div>

                            </div>
                          </div>
                        </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.box-body -->
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

  <?php
  include  'build/footer.php';
  ?>

  <script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_provinsi.php",
          	cache: false,
          	success: function(msg){
              $("#provinsi").html(msg);
            }
        });

      	$("#provinsi").change(function(){
      	var provinsi = $("#provinsi").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kabupaten.php",
              	data: {provinsi: provinsi},
              	cache: false,
              	success: function(msg){
                  $("#kabupaten").html(msg);
                }
            });
        });

        $("#kabupaten").change(function(){
      	var kabupaten = $("#kabupaten").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kecamatan.php",
              	data: {kabupaten: kabupaten},
              	cache: false,
              	success: function(msg){
                  $("#kecamatan").html(msg);
                }
            });
        });

        $("#kecamatan").change(function(){
      	var kecamatan = $("#kecamatan").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kelurahan.php",
              	data: {kecamatan: kecamatan},
              	cache: false,
              	success: function(msg){
                  $("#kelurahan").html(msg);
                }
            });
        });
     });
</script>
