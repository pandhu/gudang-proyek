<div class="container main-page" style="padding: 140px 15px 0;">
    <h1 class="jumbo-title">BUAT AKUN</h1>
    <div class="new-acc-form">
     <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal'), 'action'=>Yii::app()->createUrl('/moderator/register')));?>

     <div class="form-group">
        <?php echo $form->label($moderatorModel, 'Username', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
            <?php echo $form->textField($moderatorModel, 'Username', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($moderatorModel, 'Username');?>   
    </div>

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
        <label class="control-label col-sm-4" for="pwd">Kata Sandi</label>
        <div class="col-sm-8">          
          <input type="password" name="password" class="form-control cd-form" id="pwd">
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="pwd">Ulang Kata Sandi</label>
    <div class="col-sm-8">          
      <input type="password" name="passwordUlang" class="form-control cd-form" id="pwd">
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