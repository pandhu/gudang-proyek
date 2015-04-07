<?php
class User extends SuperUser{

	public $email;
	public $no_telepon;
	public static function model($className=__CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return 'user';
	}

	protected function instantiate($attributes) {
        $class=$attributes['type'];
        $model=new $class(null);
        return $model;
    }

	public function beforeSave() {
        if ($this->isNewRecord) {
            $this->type = get_class($this);
        }
        return parent::beforeSave();
    }

	public function rules(){
		return array(
			array('nama,email,no_telepon','required'),
		);
	}

	public function relations(){
		return array(
			'report_komentar'=>array(self::HAS_MANY,'ReportKomentar','id'),
			'report_thread'=>array(self::HAS_MANY,'ReportThread','id'),
		);
	}

	public function attributeLabels(){
		return array(
		);
	}

	function defaultScope() {
		return array(
			'condition'=>"type='User'",
		);
	}
}
?>