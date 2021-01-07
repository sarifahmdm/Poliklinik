<form class="form-horizontal">
  <div class="box-body">
    <div class="form-group">
      <label class="col-sm-2 control-label">Poli</label>
      <div class="col-sm-10">
        <select name = "poli">
          <option value = "Gigi">Gigi</option>
          <option value = "Kia">KIA</option>
          <option value = "Umum">Umum</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Jenis Pembiayaan</label>
      <div class="col-sm-10">
        <input type="radio" name="asuransi" value="Umum">Umum<br>
        <input type="radio" name="asuransi" value="Asuransi"
        data-toggle="modal" data-target="#myModal">Asuransi</button>
      </div>
    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-info pull-right">Save</button>
    </div>
  </div>
</form>
