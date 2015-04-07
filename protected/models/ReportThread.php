<?php
class ReportThread extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'report_thread';
	}

	public function rules(){
		return array(
			array('Isi_Report','required'),
		);
	}

	public function relations(){
		return array(
			'thread'=>array(self::BELONGS_TO,'Thread','id'),
			'user'=>array(self::BELONGS_TO,'User','username'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>