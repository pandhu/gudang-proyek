<div class="container main-page" style="padding: 140px 15px 0;">
    <h1 class="jumbo-title">BUAT AKUN</h1>
    <div class="new-acc-form">
       <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal'), 'action'=>Yii::app()->createUrl('/developer/register')));?>

       <div class="form-group">
        <?php echo $form->label($developerModel, 'Username', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
            <?php echo $form->textField($developerModel, 'Username', array('class'=>'cd-form form-control', 'disabled'=>'true'));?>  
        </div>
        <?php echo $form->error($developerModel, 'Username');?>   
    </div>

<div class="form-group">
    <?php echo $form->label($developerModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
    <div class="col-sm-8">          
        <?php echo $form->textField($developerModel, 'Email', array('class'=>'cd-form form-control'));?>  
    </div>
    <?php echo $form->error($developerModel, 'Email');?>   
</div>
<h3>Identitas Diri</h3>
<div class="form-group">
    <?php echo $form->label($developerModel, 'Nama', array('class'=>'col-sm-4 control-label'));?>  
    <div class="col-sm-8">          
        <?php echo $form->textField($developerModel, 'Nama', array('class'=>'cd-form form-control'));?>  
    </div>
    <?php echo $form->error($developerModel, 'Nama');?>   
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