<?php
class Admin extends SuperUser{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'admin';
	}

	public function rules(){
		return array(
			array('Nama,Email,Username,No_Telepon','required'),
		);
	}

	public function relations(){
		return array(
 			'superuser'=>array(self::HAS_ONE,'SuperUser','Username'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>