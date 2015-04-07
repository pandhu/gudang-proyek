<?php
class ReportKomentar extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'report_komentar';
	}

	public function rules(){
		return array(
			array('Isi_Report','required'),
		);
	}

	public function relations(){
		return array(
			'komentar'=>array(self::BELONGS_TO,'Komentar','id'),
			'user'=>array(self::BELONGS_TO,'User','username'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>