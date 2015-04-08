<?php

class DeveloperController extends Controller
{
	public function actionDashboard(){
		session_start();
		var_dump($_SESSION['data']);
		$developer = Developer::model()->findByPK($_SESSION['data']['Username']);
		Yii::app()->session['user'] = $_SESSION['data'];

		if ($developer == null){
			$this->redirect(Yii::app()->baseUrl.'/developer/register');
			return;
		}
		$this->render('/developer/index');
		//$developer =  Developer::model()->findByPk($npm);
		//var_dump(Yii::app()->session['developer']);
		}

	public function actionRegister(){
		$user = Yii::app()->session['user'];
		if(isset($_POST['Developer'])){
			//insert validate here
			$developer = new Developer;
			$developer->attributes = $_POST['Developer'];
			$developer->Username = $user['username'];
			$developer->Npm = $user['npm'];	
			$developer->save(false);
			$this->redirect(Yii::app()->baseUrl.'/dashboard');
		}
		//var_dump($developer);
		$developer = Developer::model();
		$developer->Username = $user['username'];
		$this->render('/developer/register', array('developerModel'=>$developer));
	}
}