 <!-- Begin page content -->
    <div class="container">
      <div class="thread-table">
        <div class="row cd-thread-head">
          <div class="col-sm-6">
            <h2 class="jumbo-subtitle">Daftar Thread</h2>
          </div>
          <div class="col-sm-6 helper">
            <label class="control-label col-sm-3 sort" for="sort">Urut Berdasarkan</label>
              <div class="col-sm-4">          
                  <select class="form-control select select-primary mbm mrs cd-sort-dropdown" data-toggle="select">
                    <option value="0">Judul</option>
                    <option value="1">Status</option>
                    <option value="2">Nilai Proyek</option>
                    <option value="3">Lokasi</option>
                  </select>
                </div>
                <div class="col-sm-5">  
                  <div class="form-group">
                    <input type="text" class="form-control cd-search-input" value="" id="search" />
                    <label class="cd-search-input-icon fui-search" for="search"></label>
                  </div>
                </div>
          </div>
        </div>
        <table class="table cd-thread-striped">
          <?php foreach($listThread as $list): ?>
          <tr>
            <td>
              <div class="row">
                <div class="col-sm-12">
                  <p class="thread-title"><?php echo CHtml::link ($list->Judul,array('thread/viewthread','id' => $list->Id)) ?></p><!-- getProjectName -->
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <p class="form-title">Lokasi</p>
                  <p class="form-title">Nilai Proyek</p>
                  <p class="form-title">Tenggat Waktu</p>
                </div>
                <div class="col-sm-4">
                  <p class="form-content"><?php echo $list->Lokasi ?></p><!-- getLocation-->
                  <p class="form-content"><?php echo $list->Harga ?></p><!-- getPrice-->
                  <p class="form-content"><?php echo $list->Tanggal_Deadline ?></p><!-- getDeadline-->
                </div>
                <div class="col-sm-2">
                  <p class="form-title">Status</p>
                  <p class="form-title">Pengembang</p>
                </div>
                <div class="col-sm-4">
                  <p class="form-content"><?php 
                                            if ($list->Status == 0) echo "Tersedia";
                                            else if ($list->Status == 1) echo "Batal";
                                            else if ($list->Status == 2) echo "Selesai";
                                            else echo "Dalam Pengerjaan"; 
                                          ?></p><!-- getProjectStatus-->
                  <p class="form-content"><?php echo $list->Developer ?></p><!-- getProjectDev-->
                </div>
              </div>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div> 
    </div>

