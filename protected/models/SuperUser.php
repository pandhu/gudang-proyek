<?php
class SuperUser extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'super_user';
	}

	public function rules(){
		return array(
			array('Username,Password','required'),
		);
	}

	public function relations(){
		return array(
			'komentar'=>array(self::HAS_MANY,'Komentar','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>