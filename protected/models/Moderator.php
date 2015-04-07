<?php
class Moderator extends SuperUser{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'moderator';
	}

	public function rules(){
		return array(
			array('Nama,Email,Username','required'),
		);
	}

	public function relations(){
		return array(
			'pengumuman'=>array(self::HAS_MANY,'Pengumuman','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
	
}
?>