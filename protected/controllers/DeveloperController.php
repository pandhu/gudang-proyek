<?php

class DeveloperController extends Controller
{
	public function init(){
		$this->layout = "developer-inner";
	}
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

			$superUser = new SuperUser;
			$superUser->Username = $user['npm']." ".$user['Username'];
			$superUser->Password = md5("not required");
			$superUser->Role = "Developer";	

			//insert validate here
			$developer = new Developer;
			$developer->attributes = $_POST['Developer'];
			$developer->Username = $user['Username'];
			$developer->Npm = $user['npm'];	

			$developer->save(false);
			$superUser->save(false);
			$this->redirect(Yii::app()->baseUrl.'/admin/dashboard');
		}
		//var_dump($developer);
		$developer = Developer::model();
		$developer->Username = $user['Username'];
		$this->render('/developer/register', array('developerModel'=>$developer));
	}
	public function actionLogin(){
		$this->redirect(Yii::app()->baseUrl.'/auth');
	}
	public function actionLogout(){
		Yii::app()->session->clear();
		$this->redirect(Yii::app()->baseUrl.'/auth?logout=true');
	}
}