<?php
class Testimoni extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'testimoni';
	}

	public function rules(){
		return array(
			array('Isi_Testimoni,KetepatanWaktu_Rate,Komunikasi_Rate,Keakuratan_Rate','required'),
		);
	}

	public function relations(){
		return array(
			'thread'=>array(self::BELONGS_TO,'Thread','id'),
			'client'=>array(self::BELONGS_TO,'Client','username'),
			'developer'=>array(self::BELONGS_TO,'Developer','username'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>