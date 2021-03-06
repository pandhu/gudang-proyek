<div class="container">
  <div class="row profile-table">
    <div class="col-sm-2">
      <img class="prof-pic" src="<?php echo Yii::app()->baseUrl?>/uploads/propict/<?php echo $imageUrl?>">
    </div>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="user-fullname"><?php echo $admin->Nama?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <p class="form-title">No. Telepon</p>
          <p class="form-title">E-mail</p>
          <p class="form-title">Status</p>
        </div>
        <div class="col-sm-5">
          <p class="form-content"><?php echo $admin->No_Telepon?></p>
          <p class="form-content"><?php echo $admin->Email?></p>

          <p class="form-content">Administrator</p>
        </div>
        <div class="col-sm-5">

        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-10">
      <h2 class="jumbo-subtitle">Daftar Laporan (DUMMY!)</h2>
    </div>
    <div class="col-sm-2 button-set">
      <button type="button" class="mini-btn am-btn-field-icon" data-toggle="tooltip" data-placement="bottom" title="Buat thread baru">
        <span class="fui-plus" aria-hidden="true"></span>
      </button>
      <button type="button" class="mini-btn am-btn-field-icon" data-toggle="tooltip" data-placement="bottom" title="Hapus thread">
        <span class="fui-trash" aria-hidden="true"></span>
      </button>
    </div>
  </div>

  <table class="table am-table-striped">
    <thead>
      <tr>
        <th>ID Pengguna</th>
        <th>Nama Pengguna</th>
        <th>Waktu Melapor</th>
        <th>Status Laporan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>#12345</td>
        <td>pentajulias</td>
        <td>7-3-2015 21.59</td>
        <td>Belum ditangani</td>
      </tr>
      <tr>
        <td>#12345</td>
        <td>pentajulias</td>
        <td>7-3-2015 21.59</td>
        <td>Sudah ditangani</td>
      </tr>
    </tbody>
  </table>
</div>
