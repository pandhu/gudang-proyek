<div class="container">
  <div class="row profile-table">
    <div class="col-sm-2">
      <img class="prof-pic" src="assets/icons/female-user.png">
    </div>
    <div class="col-sm-10">
      <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal col-sm-4'), 'action'=>Yii::app()->createUrl('/client/update')));?>
      <div class="form-group">
        <?php echo $form->label($clientModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($clientModel, 'Email', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'Email');?>   
      </div>
      <div class="form-group">
        <?php echo $form->label($clientModel, 'No_Identitas', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($clientModel, 'No_Identitas', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'No_Identitas');?>   
      </div>
      <div class="form-group">
        <?php echo $form->label($clientModel, 'Nama', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($clientModel, 'Nama', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'Nama');?>   
      </div>
      <div class="form-group">
        <?php echo $form->label($clientModel, 'Tanggal_Lahir', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->dateField($clientModel, 'Tanggal_Lahir', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'Tanggal_Lahir');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($clientModel, 'No_Telepon', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($clientModel, 'No_Telepon', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'No_Telepon');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($clientModel, 'Kota_Asal', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($clientModel, 'Kota_Asal', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'Kota_Asal');?>   
      </div>
      <div class="form-group">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <?php echo CHtml::submitButton('Save', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:10px; float:right'));?>
          </div>
          <div class="col-sm-4"></div>
      </div>

      <?php $this->endWidget();?>
    </div>
  </div>
</div>