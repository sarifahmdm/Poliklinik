<!-- The Modal -->
<div class="modal fade" id="myModal_ajukan">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Ajukan Pasien ke _</h3>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-horizontal control-form" method="post" action="proses_antrian.php">
          <div class="box-body">
            <input type="hidden" name = "no_rekam_medis" value="<?php echo "$no_rekam_medis";?>"/>
            <div class="form-group">
              <label class="col-sm-2 control-label"><b>Jenis Poli</b></label>
              <div class="col-sm-5">
                <select class="form-control select2" name="jenis_poli">
                  <option></option>
                  <option value = "Poli Gigi">Poli Gigi</option>
                  <option value = "Poli Kia">Poli Kia</option>
                  <option value = "Poli Umum">Poli Umum</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label"><b>Jenis Pembiayaan</b></label>
              <?php
                $select_pembiayaan = "SELECT * FROM `pembiayaan` WHERE id_pasien = '$id_pasien'";
                $query_pembiayaan = mysqli_query($conn, $select_pembiayaan);
                $num = 0;
                while ($data_pembiayaan = mysqli_fetch_array($query_pembiayaan)) {
                  $num = $num +1;
                  $nama_asuransi = $data_pembiayaan['nama_asuransi'];
                  $nomor_asuransi = $data_pembiayaan['nomor_asuransi'];
                }
                if ($num == 1) {
                  echo "
                  <div class='from-group col-sm-5'>
                    <input class='form-control' type='text' name='nama_asuransi' value='$nama_asuransi'/>
                    <input class='form-control' type='text' name='nomor_asuransi' value='$nomor_asuransi'/>
                  </div>
                  ";
                } else {
                  echo "
                  <div class='from-group col-sm-5'>
                    <input class='form-control' type='text' name='nama_asuransi' placeholder = 'Masukkan Nama Asuransi'/>
                    <input class='form-control' type='text' name='nomor_asuransi' placeholder='Masukkan Nomor Asuransi'/>
                  </div>
                  ";
                }
               ?>

            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-warning pull-right">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


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



<!--ending modal -->
