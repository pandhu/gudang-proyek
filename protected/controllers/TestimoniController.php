<?php

class TestimoniController extends Controller
{
	public function init(){
		//check user role
		if (false){
			$this->redirect('client/login');
		}
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
	
	public function actionAjax()
    {
        $data = array();
        $data["myValue"] = "Content loaded";
 
        $this->render('/testimoni/ajax', $data);
    }
	public function actionUpdateAjax()
    {
        $data = array();
        $data["myValue"] = "Content updated in AJAX";
 
        $this->renderPartial('_ajaxContent', $data, false, true);
    }
}