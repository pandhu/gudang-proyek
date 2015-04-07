<h3>Testimoni Baru</h3>

<?php $form = $this->beginWidget('CActiveForm', array('id'=>'login-form', 'action'=>Yii::app()->baseUrl.'/thread/save'));?>
    <div class="form-group">
        <?php echo $form->textField($threadModel, 'Judul', array('class'=>'form-control', 'placeholder'=>'Judul'));?>  
        <?php echo $form->error($threadModel, 'Judul');?>   
    </div>
    <div class="form-group">
        <?php echo $form->textField($threadModel, 'Lokasi', array('class'=>'form-control', 'placeholder'=>'Lokasi'));?>  
        <?php echo $form->error($threadModel, 'Lokasi');?>   
    </div>
    <div class="form-group">
        <?php echo $form->textField($threadModel, 'Harga', array('class'=>'form-control', 'placeholder'=>'Harga'));?>  
        <?php echo $form->error($threadModel, 'Harga');?>   
    </div>
    <?php
    $this->widget('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker',array(
                'language'=>'',
                'model'=>$threadModel,                                // Model object
                'attribute'=>'Tanggal_Deadline', // Attribute name
                'mode'=>'date',                     // Use "time","date" or "datetime" (default)
                'options'=>array(),                     // jquery plugin options
                'htmlOptions'=>array('readonly'=>true) // HTML options
        ));                             

    ?>
    <?php $this->widget('application.extensions.tinymce.ETinyMce',
                    array(
                    'name'=>'deskripsi',
                    'useSwitch' => false,
                    'editorTemplate'=>'full',
                    )
                ); 
 ?>
    <div class="form-group">
        <?php echo CHtml::submitButton('Save', array('class'=>'btn btn-default', 'style'=>'margin-top:10px; float:right'));?>
    </div>
    <?php $this->endWidget();?>