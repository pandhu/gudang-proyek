<h3>Isi Thread</h3>

Id: <?php echo $thread->Id ?><hr>
Judul: <?php echo $thread->Judul ?><br>
Client: <?php echo $thread->Username ?><hr>
Tanggal_Deadline: <?php echo $thread->Tanggal_Deadline ?><hr>
Tanggal_Posting: <?php echo $thread->Tanggal_Posting ?><hr>
Lokasi: <?php echo $thread->Lokasi ?><hr>
Harga: <?php echo $thread->Harga ?><hr>
Deskripsi: <?php echo $thread->Deskripsi ?><hr>
Status: <?php echo $thread->Status ?><hr>


<h1> Komentar </h1>

<?php 
    if (count($komentar) < 1) echo "Belum ada";
    else {
        foreach($komentar as $value) {
            echo "<table>";
            echo "<tr>";
            echo "<td> $value->Username </td>";
            echo "<td>";
            echo CHtml::link('Edit', array('thread/editkomentar', 'id' => $value->Id, 'id_thread' => $value->Id_Thread, 'username' => $value->Username));
            echo "|";
            echo CHtml::link('Delete', array('thread/deletekomentar', 'id' => $value->Id, 'id_thread' => $value->Id_Thread, 'username' => $value->Username), array('onClick'=>'return confirm("Are you sure?");'));
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> $value->Isi_Komentar </td>";
            echo "</tr>";
            echo "</table>";
        }
    }
 ?>
<h1> Komentar Baru </h1>


<?php 
$idThread = $thread->Id;
$form = $this->beginWidget('CActiveForm', array('id'=>'login-form', 'action'=>Yii::app()->createUrl('/thread/savekomentar/'.$idThread)));
?>

<?php
    $this->widget('application.extensions.tinymce.ETinyMce',
                    array(
                    'name'=>'isi_komentar',
                    'model'=>$komentarModel,
                    'attribute'=>'Isi_Komentar',
                    'useSwitch' => false,
                    'editorTemplate'=>'full',
                    )
                ); 

?>

<div class="form-group">
        <?php echo CHtml::submitButton('Save', array('class'=>'btn btn-default', 'style'=>'margin-top:10px; float:right'));?>
    </div>
<?php $this->endWidget();?>