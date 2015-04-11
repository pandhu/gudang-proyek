<?php
class SuperUser extends CActiveRecord{

	public $image;
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'super_user';
	}

	public function rules(){
		return array(
			array('Username,Password','required'),
            array('Image', 'file', 'types'=>'jpg, gif, png'),

		);
	}

	public function relations(){
		return array(
			'komentar'=>array(self::HAS_MANY,'Komentar','id'),
			'client'=>array(self::HAS_ONE,'Client','Username'),
			'moderator'=>array(self::HAS_ONE,'Moderator','Username'),
 			'admin'=>array(self::HAS_ONE,'Admin','Username'),

		);
	}

	public function attributeLabels(){
		return array(
		);
	}
}
?>