<div class="container main-page" style="padding: 140px 15px 0;">
    <h1 class="jumbo-title">BUAT AKUN</h1>
    <div class="new-acc-form">
       <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal'), 'action'=>Yii::app()->createUrl('/client/save')));?>

       <div class="form-group">
        <?php echo $form->label($clientModel, 'Username', array('class'=>'col-sm-4 control-label'));?>  
        <div class="col-sm-8">          
            <?php echo $form->textField($clientModel, 'Username', array('class'=>'cd-form form-control'));?>  
        </div>
        <?php echo $form->error($clientModel, 'Username');?>   
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
    <?php echo $form->label($clientModel, 'Email', array('class'=>'col-sm-4 control-label'));?>  
    <div class="col-sm-8">          
        <?php echo $form->textField($clientModel, 'Email', array('class'=>'cd-form form-control'));?>  
    </div>
    <?php echo $form->error($clientModel, 'Email');?>   
</div>
<h3>Identitas Diri</h3>
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