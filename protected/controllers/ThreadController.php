<?php

class ThreadController extends Controller
{
	public function init(){
		$this->layout="thread";
		//check user role
		if (false){
			$this->redirect('client/login');
		}
	}
	//?
	public function actionIndex(){
		$thread = Thread::model();
		var_dump($thread->attributes);
	}

	//menampilkan halaman pembutaan thread baru
	public function actionCreate(){

		$threadModel = Thread::model();
		$this->render('/thread/create', array('threadModel'=>$threadModel));
	}

	//menyimpan thread baru
	public function actionSave(){
		$newThread = new Thread;
		$newThread->attributes = $_POST['Thread'];
		//$newThread->Tanggal_Deadline = $_POST['tgl_deadline'];
		//$newThread->Username = Yii::app()->session['client']['username'];
		//$date = str_replace("/", "-", $_POST['Thread']['Tanggal_Deadline']);
		//$newThread->Tanggal_Deadline = $date;
		//$date = $date.":00";
		//var_dump($newThread->attributes);
		//var_dump($date);
		$newThread->save();
		$this->redirect(Yii::app()->createUrl('thread/listthread'));

	}

	//menampilkan halaman penyuntingan thread
	public function actionEdit($id){
		//$threadModel = Thread::model()->findAll("Id=$id");
		$threadModel = Thread::model()->findByPk("$id");
		//if(count($threadModel) < 2)
		//	echo "ASO";
		
		//var_dump($thread->attributes);
		//var_dump($threadModel->attributes);
		$this->render('/thread/edit', array('threadModel'=>$threadModel));
	}

	//update thread
	public function actionUpdate($id){
		$threadModel = Thread::model()->findByPk($id);
		$threadModel->attributes = $_POST['Thread'];
		//$newThread->Username = Yii::app()->session['client']['username'];
		$threadModel->update();
		$this->redirect(Yii::app()->createUrl('thread/listthread'));
	}

	//delete thread
	public function actionDelete($id){
		$thread = Thread::model()->findByPk($id);
	    $thread->delete();
	    //Yii::app()->user->setFlash('success', 'Delete Success.');
	    $this->redirect(Yii::app()->createUrl('thread/listthread'));

	}

	public function actionViewThread($id){
		$thread = Thread::model()->findByPk($id);
		$komentarModel = Komentar::model();
		$komentar = Komentar::model()->findAll("Id_Thread = $id");
		$this->render('/thread/view', array('thread'=>$thread, 'komentar'=>$komentar, 'komentarModel'=>$komentarModel)); 
	}
	
	public function actionListThread(){
		$listThread = Thread::model()->findAll();
		$this->render('/thread/listThread',array('listThread'=>$listThread));
	}
	
	//menyimpan thread baru
	public function actionSaveKomentar($id){
		$komentar = new Komentar;
		$komentar->attributes = $_POST['Komentar'];
		$komentar->Id_Thread=$id;
		//$newThread->Tanggal_Deadline = $_POST['tgl_deadline'];
		//$newThread->Username = Yii::app()->session['client']['username'];
		//$date = str_replace("/", "-", $_POST['Thread']['Tanggal_Deadline']);
		//$newThread->Tanggal_Deadline = $date;
		//$date = $date.":00";
		//var_dump($newThread->attributes);
		//var_dump($komentar->attributes);
		
		$komentar->save();
		
		$this->redirect(Yii::app()->createUrl('thread/viewthread/'.$id));
	}

	//menampilkan halaman penyuntingan thread
	public function actionEditKomentar($id, $id_thread, $username){
		//$threadModel = Thread::model()->findAll("Id=$id");
		$komentarModel = Komentar::model()->findByPk(array('Id'=>$id,'Id_Thread'=>$id_thread,'Username'=>$username));
		//if(count($threadModel) < 2)
		//	echo "ASO";
		
		//var_dump($thread->attributes);
		//var_dump($threadModel->attributes);
		$this->redirect(Yii::app()->createUrl('thread/viewthread/'.$id_thread));
	}

	//update thread
	public function actionUpdateKomentar($id){
		$komentarModel = Komentar::model()->findByPk($id);
		$komentarModel->attributes = $_POST['Komentar'];
		//$newThread->Username = Yii::app()->session['client']['username'];
		$komentarModel->update();
		//$this->redirect(Yii::app()->createUrl('thread/listthread'));
		//$this->redirect(Yii::app()->createUrl('thread/viewthread/'.$id));
	}

	//delete thread
	public function actionDeleteKomentar($id, $id_thread, $username){
		$komentarModel = Komentar::model()->findByPk(array('Id'=>$id,'Id_Thread'=>$id_thread,'Username'=>$username));
	    //var_dump($komentarModel);
	    $komentarModel->delete();
	    
		$this->redirect(Yii::app()->createUrl('thread/viewthread/'.$id_thread));
	}
}