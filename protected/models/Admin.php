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
		);
	}

	public function relations(){
		return array(
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>