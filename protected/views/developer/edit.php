<div class="container">
  <div class="row profile-table">
    <div class="col-sm-2">
      <img class="prof-pic" src="assets/icons/female-user.png">
    </div>
    <div class="col-sm-10">
      <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal col-sm-4'), 'action'=>Yii::app()->createUrl('/developer/update')));?>
      <div class="form-group">
        <?php echo $form->label($developerModel, 'Nama', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($developerModel, 'Nama', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($developerModel, 'Nama');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($developerModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($developerModel, 'Email', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($developerModel, 'Email');?>   
      </div>
       
      <div class="form-group">
        <?php echo $form->label($developerModel, 'No_Telepon', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($developerModel, 'No_Telepon', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($developerModel, 'No_Telepon');?>   
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