<?php

class AdminController extends Controller
{
	//fungsi init
	public function init(){
		//check user role
		if (false){
			$this->redirect('admin/login');
		}
	}

	public function actionProfile(){
		$admin = Admin::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/admin/profile', array('admin'=>$admin));
	}
	public function actionLogin(){
		if (isset($_POST['SuperUser'])){
			$user = SuperUser::model()->findByPk($_POST['SuperUser']['Username']);
			if($user == null){
				$this->redirect(Yii::app()->createUrl('/admin/login'));
				return;
			}
			$userPass = $user->Password;
			if($userPass != md5($_POST['SuperUser']['Password'])){
				$this->redirect(Yii::app()->createUrl('/admin/login'));
				return;
			} 
			var_dump($userPass);
			Yii::app()->session['user'] = $user->attributes;
			$this->redirect(Yii::app()->createUrl('/admin/dashboard'));
		}
		$userModel = SuperUser::model();
		$this->render('/admin/login', array('userModel'=>$userModel));
	}

	public function actionDashboard(){
		$this->render('/admin/index');
	}
}