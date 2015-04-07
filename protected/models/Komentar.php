<?php
class Komentar extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'komentar';
	}

	public function rules(){
		return array(
			array('Isi_Komentar','required'),
		);
	}

	public function relations(){
		return array(
			'super_user'=>array(self::BELONGS_TO,'SuperUser','username'),
			'thread'=>array(self::BELONGS_TO,'Thread','id'),
			'report_komentar'=>array(self::HAS_MANY,'ReportKomentar','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}
	function defaultScope()
    {
        return array(
            'alias' => $this->tableName()
            );       
    }
}
?>