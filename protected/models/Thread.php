<?php
class Thread extends CActiveRecord{

	
	public static function model($className=__CLASS__){
		return parent::model($className);
	}
	
	public function tableName(){
		return 'thread';
	}

	public function rules(){
		return array(
			array('Judul,Tanggal_Deadline,Lokasi,Harga,Deskripsi','required'),
		);
	}

	public function relations(){
		return array(
			'client'=>array(self::BELONGS_TO,'Client','username'),
			'report_thread'=>array(self::HAS_MANY,'ReportThread','id'),
			'testimoni'=>array(self::HAS_MANY,'Testimoni','id'),
			'komentar'=>array(self::HAS_MANY,'Komentar','Id_Thread'),
		);
	}

	public function attributeLabels(){
		return array(
			
		);
	}

	/*public function search(){
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('konten',$this->konten);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/

	/*public function scopes() {
	    return array(
	        'byid' => array('order' => 'id DESC'),
	        'bydate' => array('order' => 'time_stamp DESC'),
	    );
	}*/
	function defaultScope()
    {
        return array(
            'alias' => $this->tableName()
            );       
    }
}
?>