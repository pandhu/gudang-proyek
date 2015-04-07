<?php
class Client extends SuperUser{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'client';
	}

	public function rules(){
		return array(
			array('No_Identitas, Kota_Asal, Tanggal_Lahir, Nama, Email, No_Telepon','required'),
		);
	}

	public function relations(){
		return array(
			'thread'=>array(self::HAS_MANY,'Thread','id'),
			'testimoni'=>array(self::HAS_MANY,'Testimoni','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}

}
?>