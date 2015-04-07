<?php
class Developer extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'developer';
	}

	public function rules(){
		return array(
			array('Nama, No_Telepon, Email','required'),
		);
	}

	public function relations(){
		return array(
			'testimoni'=>array(self::HAS_MANY,'Testimoni','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}


}
?>