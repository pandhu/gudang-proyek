<div class="container">
  <div class="row profile-table">
    <div class="col-sm-2">
      <img class="prof-pic " src="<?php echo Yii::app()->baseUrl?>/uploads/propict/<?php echo $imageUrl?>">
    </div>
    <div class="col-sm-10">
      <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal col-sm-4','enctype'=>'multipart/form-data'), 'action'=>Yii::app()->createUrl('/moderator/update')));?>
      <div class="form-group">
        <?php echo $form->label($moderatorModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($moderatorModel, 'Email', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($moderatorModel, 'Email');?>   
      </div>
      <div class="form-group">
        <?php echo $form->label($moderatorModel, 'Nama', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($moderatorModel, 'Nama', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($moderatorModel, 'Nama');?>   
      </div>

      <div class="form-group">
        <?php echo $form->label($moderatorModel, 'No_Telepon', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->textField($moderatorModel, 'No_Telepon', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($moderatorModel, 'No_Telepon');?>   
      </div>

      
      <div class="form-group">
        <?php echo $form->label($moderatorModel, 'Profile_Image', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
          <?php echo $form->fileField($superUser,'Image', array('class'=>'form-control'));?>
        </div>
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