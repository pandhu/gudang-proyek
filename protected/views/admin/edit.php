<div class="container">
  <div class="row profile-table">
    <div class="col-sm-2">
      <img class="prof-pic" src="<?php echo Yii::app()->baseUrl?>/uploads/propict/<?php echo $imageUrl?>">
    </div>
    <div class="col-sm-10">
      <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal col-sm-4', 'enctype'=>'multipart/form-data'), 'action'=>Yii::app()->createUrl('/admin/update')));?>
      <div class="form-group">
        <?php echo $form->label($adminModel, 'Nama', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($adminModel, 'Nama', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($adminModel, 'Nama');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($adminModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($adminModel, 'Email', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($adminModel, 'Email');?>   
      </div>
       
      <div class="form-group">
        <?php echo $form->label($adminModel, 'No_Telepon', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($adminModel, 'No_Telepon', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($adminModel, 'No_Telepon');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($adminModel, 'Profile_Image', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->fileField($superUser,'Image', array('class'=>'form-control'));?>
        </div>
      </div>

      <div class="form-group">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
              <?php echo CHtml::submitButton('Save', array('class'=>'btn am-btn-primary btn-lg btn-block', 'style'=>'margin-top:10px; float:right'));?>
          </div>
          <div class="col-sm-4"></div>
      </div>

      <?php $this->endWidget();?>
    </div>
  </div>
</div>