<?php
class Pengumuman extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'pengumuman';
	}

	public function rules(){
		return array(
			array('Isi_Pengumuman','required'),
		);
	}

	public function relations(){
		return array(
			'moderator'=>array(self::BELONGS_TO,'Moderator','username'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>