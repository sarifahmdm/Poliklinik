<!-- The Modal -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Akan dirujuk ke-</h3>
        <button type="button" class="close" data-dismiss="modal"> &times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="box-body form-group">
          <div class="col-sm-10">
            <h3><input type="radio" name="lingkup" value="Internal">&nbsp;Internal</input></h3>
            <?php if ($jenis_poli == "Poli Gigi"){
              echo "
              <div class='col-sm-3'>
                <select name = 'tujuan_internal'>
                  <option value='Poli Anak'>Poli Anak</option>
                  <option value='Poli Umum'>Poli Umum</option>
                </select>
              </div>
              ";
            } elseif ($jenis_poli == "Poli Umum") {
              echo "
              <div class='col-sm-3'>
                <select name = 'tujuan_internal'>
                  <option value='Poli Anak'>Poli Anak</option>
                  <option value='Poli Gigi'>Poli Gigi</option>
                </select>
              </div>
              ";
            } elseif ($jenis_poli == "Poli Kia") {
              echo "
              <div class='col-sm-3'>
                <select name = 'tujuan_internal'>
                  <option value='Poli Gigi'>Poli Gigi</option>
                  <option value='Poli Umum'>Poli Umum</option>
                </select>
              </div>
              ";
            }
            ?>
            <br>
            <h3><input type="radio" name="lingkup" value="Eksternal">&nbsp;Eksternal</input></h3>
            <div class="col-sm-10">
              <input name="tujuan" type="text" class="form-control" placeholder="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning" data-dismiss="modal">Save</button>
        </div>
      </div>

    </div>
  </div>
</div>

<!--ending modal -->
