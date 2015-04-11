<div class="container">

  <div class="row">
    <div class="col-sm-10">
      <h2 class="jumbo-subtitle">Moderator</h2>
    </div>
    <div class="col-sm-2 button-set">
      <a href="<?php echo Yii::app()->baseUrl?>/admin/addmoderator/" type="a" class="mini-btn am-btn-field-icon" data-toggle="tooltip" data-placement="bottom" title="Buat thread baru">
        <span class="fui-plus" aria-hidden="true"></span>
      </a>
      <button type="button" class="mini-btn am-btn-field-icon" data-toggle="tooltip" data-placement="bottom" title="Hapus thread">
        <span class="fui-trash" aria-hidden="true"></span>
      </button>
    </div>
  </div>

  <table class="table am-table-striped">
    <thead>
      <tr>
        <th>ID Moderator</th>
        <th>Nama Pengguna</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody> 
      <?php foreach ($moderators as $moderator): ?>
      <tr>
        <td><?php echo $moderator->superuser->Username?></td>
        <td><?php echo $moderator->Nama?></td>
        <td><a class="fui-trash delete-moderator" data-link="<?php echo Yii::app()->baseUrl?>/admin/deletemod/<?php echo $moderator->Username?>"></a></td>
      </tr>
    <?php
      endforeach;?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModerator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Moderator</h4>
      </div>
      <div class="modal-body">
        You sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a type="button" id="yes-delete-moderator" class="btn am-btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>

</div>
<script type="text/javascript">
  $('.delete-moderator').click(function(){
    $('#yes-delete-moderator').attr('href', $(this).attr('data-link'));
    $('#deleteModerator').modal('show');
  });
</script>