
<div class="row profile-table">
  <div class="col-sm-2">
    <img class="prof-pic" src="assets/icons/female-user.png">
  </div>
  <div class="col-sm-10">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="user-fullname">Saadaturrohim Nafi'ah Al-Khoir</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2">
        <p class="form-title">No. Telepon</p>
        <p class="form-title">E-mail</p>
      </div>
      <div class="col-sm-4">
        <p class="form-content"><?php echo $client->No_Telepon?></p>
        <p class="form-content"><?php echo $client->Email?></p>
      </div>
      <div class="col-sm-2">
        <p class="form-title">Status</p>
      </div>
      <div class="col-sm-4">
        <p class="form-content">Klien</p>
      </div>
    </div>
  </div>
</div>
<h2 class="jumbo-subtitle"> Thread Saya</h2>
<div class="row">
  <button type="button" class="btn btn-field-icon" data-toggle="tooltip" data-placement="bottom" title="Hapus thread">
    <span class="fui-trash" aria-hidden="true"></span>
  </button>
  <span title="blablabla" data-toggle="tooltip" data-placement="top">
    <button type="button" class="btn btn-field-icon" data-toggle="modal" data-placement="bottom" title="Buat thread baru" data-target="#myModal">
      <span class="fui-plus" aria-hidden="true"></span>
    </button>
  </div>
  
  <table class="table cd-table-striped">
    <thead>
      <tr>
        <th>Nama Proyek</th>
        <th>Komentar</th>
        <th>Waktu Modifikasi</th>
        <th>Waktu Dibuat</th>
        <th>Status</th>
        <th>Pengembang</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($threads as $thread): ?>
      <tr>
        <td><a class="cd-table-link" href="client_thread-page.html"><?php echo $thread->Judul?></a></td>
        <td><?php echo count($thread->komentar)?></td>
        <td><?php echo $thread->Tanggal_Update?></td>
        <td><?php echo $thread->Tanggal_Posting?></td>
        <td><?php
        switch ($thread->Status) {
          case 0:
          echo "Tersedia";
                      # code...
          break;

          case 1:
          echo "Batal";
                      # code...
          break;
          
          case 2:
          echo "Selesai";
                      # code...
          break;

          case 3:
          echo "Dalam Pengerjaan";
                      # code...
          break;
        }
        ?></td>
        <td><?php echo $thread->Developer?></td>
      </tr>
      <?php
      endforeach;
      ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Buat Thread Baru</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <label class="control-label col-sm-2" for="judulThread">Judul Thread</label>
          <div class="col-sm-10">          
            <input type="text" class="form-control cd-form" id="judulThread">
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2" for="lokasiProyek">Lokasi Proyek</label>
          <div class="col-sm-4">          
            <input type="text" class="form-control cd-form" id="lokasiProyek">
          </div>
          <label class="control-label col-sm-2" for="hargaProyek">Harga Proyek</label>
          <div class="col-sm-4">          
            <input type="text" class="form-control cd-form" id="lokasiProyek">
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2" for="status">Status</label>
          <div class="col-sm-4">          
            <select id ="status" class="form-control select select-primary mbm mrs cd-sort-dropdown" data-toggle="select">
              <option value="0">Tersedia</option>
              <option value="1">Batal</option>
              <option value="2">Selesai</option>
              <option value="3">Dalam Pengerjaan</option>
            </select>
          </div>
          <label class="control-label col-sm-2" for="pengembang">Pengembang</label>
          <div class="col-sm-4">          
            <input type="text" class="form-control cd-form" id="pengembang" disabled>
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2" for="tenggatWaktu">Tenggat Waktu</label>
          <div class="col-sm-4">          
            <input type="date" class="form-control cd-form" id="tenggatWaktu">
          </div>
        </div>
        <div class="row">
          <label class="control-label col-sm-2" for="deskripsiSingkat">Deskripsi Singkat</label>
          <div class="col-sm-10">          
            <textarea class="form-control" rows="3" id="comment"></textarea>
          </div>
        </div>             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
