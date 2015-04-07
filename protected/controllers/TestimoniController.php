<?php

class TestimoniController extends Controller
{
	public function init(){
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
		$threadModel = Testimoni::model();
		$this->render('/testimoni/create', array('threadModel'=>$threadModel));
	}

	//menyimpan thread baru
	public function actionSave(){
		$newThred = new Thread;
		$newThred->attributes = $_POST['Thread'];
		$newThred->Deskripsi = $_POST['deskripsi'];
		$newThred->Username = Yii::app()->session['client']['username'];
		$newThred->save();
	}
}