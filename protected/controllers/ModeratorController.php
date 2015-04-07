<?php

class ModeratorController extends Controller
{
	public function actionDashboard(){
		session_start();

		$this->render('/moderator/index');
		//$moderator =  moderator::model()->findByPk($npm);
		//var_dump(Yii::app()->session['moderator']);
	}

	public function actionProfile(){
		$moderator = Moderator::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/moderator/profile', array('moderator'=>$moderator));
	}
	public function actionRegister(){
		$user = Yii::app()->session['user'];
		if(isset($_POST['Moderator'])){
			//insert validate here
			$password = $_POST['password'];
			$passwordUlang = $_POST['passwordUlang'];
			if($passwordUlang !== $password){
				//set session here
				//set redirect here
				return;
			}
			$user = new SuperUser;
			$user->Username = $_POST['Moderator']['Username'];
			$user->Password = md5($password);
			$user->Role = "Moderator";
			$user->save(false);

			$moderator = new Moderator;
			$moderator->attributes = $_POST['Moderator'];

			//var_dump($moderator->attributes);
			$moderator->save(false);
			//$this->redirect(Yii::app()->baseUrl.'/dashboard');
			return;
		}
		//var_dump($moderator);
		$moderator = Moderator::model();
		$moderator->Username = $user['username'];
		//$this->render('/moderator/register', array('moderatorModel'=>$moderator));
	}

	public function actionLogin(){
		if (isset($_POST['SuperUser'])){
			$user = SuperUser::model()->findByPk($_POST['SuperUser']['Username']);
			if($user == null){
				$this->redirect(Yii::app()->createUrl('/moderator/login'));
				return;
			}
			$userPass = $user->Password;
			if($userPass != md5($_POST['SuperUser']['Password'])){
				$this->redirect(Yii::app()->createUrl('/moderator/login'));
				return;
			} 
			var_dump($userPass);
			Yii::app()->session['user'] = $user->attributes;
			$this->redirect(Yii::app()->createUrl('/moderator/dashboard'));
		}
		$userModel = SuperUser::model();
		$this->render('/moderator/login', array('userModel'=>$userModel));
	}

}