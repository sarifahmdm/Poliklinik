
  <div class="box-body">
    <span><h2><b><font color="green">C. Diagnosis</font></b></h2></span>
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
            <?php
            $select_diagnosa = "SELECT * FROM `diagnosa` WHERE id_diagnosa=$id_diagnosa";
            $query_select = mysqli_query($conn, $select_diagnosa);
            $data_diagnosa = mysqli_fetch_array($query_select);
            $diagnosis = $data_diagnosa['diagnosis'];
            $diagnosis_banding = $data_diagnosa['diagnosis_banding'];
            ?>

            <form class="form-horizontal" method="post" action="proses_diagnosis.php?jenis_poli=<?php echo "$jenis_poli"; ?>">
              <div class="box-body">
                <input type="hidden" name="id_diagnosa" value="<?php echo "$id_diagnosa";?>">

                <div class="form-group">
                  <label  class="col-sm-5 "><h3>1. Diagnosis</h3></label>

                  <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="diagnosis">
                      <option></option>
                    <?php if ($diagnosis_banding==NULL){
                      $select_penyakit="SELECT * FROM `penyakit` WHERE 1";
                      $query_select_penyakit=mysqli_query($conn, $select_penyakit);
                      while ($data_penyakit = mysqli_fetch_array($query_select_penyakit)) {
                        $jenis_penyakit = $data_penyakit['nama_penyakit'];
                        $kelompok  = $data_penyakit['kelompok'];
                        echo "<option value=$jenis_penyakit>$kelompok : $jenis_penyakit</option>";
                      }
                      echo "</select>";
                    } elseif ($diagnosis != NULL) {
                      echo "<textarea name = 'diagnosis' class='form-control'
                      rows='3'>$diagnosis</textarea>";
                    } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-5 "><h3>2. Diagnosis Banding</h3></label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="diagnosis_banding">
                      <option></option>
                    <?php if ($diagnosis_banding==NULL){
                      $select_penyakit="SELECT * FROM `penyakit` WHERE 1";
                      $query_select_penyakit=mysqli_query($conn, $select_penyakit);
                      while ($data_penyakit = mysqli_fetch_array($query_select_penyakit)) {
                        $jenis_penyakit = $data_penyakit['nama_penyakit'];
                        $kelompok  = $data_penyakit['kelompok'];
                        echo "<option value=$jenis_penyakit>$kelompok : $jenis_penyakit</option>";
                      }
                      echo "</select>";
                    } elseif ($diagnosis_banding != NULL) {
                      echo "<textarea name = 'diagnosis_banding' class='form-control'
                      rows='3'>$diagnosis_banding</textarea>";
                    } ?>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-info pull-right">Selanjutnya</button>
              <br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
