<?php

class ModeratorController extends Controller
{
	public function init(){
		$this->layout = "moderator-inner";
	}
	public function actionDashboard(){
		session_start();

		$this->render('/moderator/index');
		//$moderator =  moderator::model()->findByPk($npm);
		//var_dump(Yii::app()->session['moderator']);
	}

	public function actionProfile(){
		$imageUrl = "default_profile.gif";
		$moderator = Moderator::model()->with('superuser')->findByPk(Yii::app()->session['user']['Username']);
		if($moderator->superuser->Image != null){
			$imageUrl = $moderator->superuser->Image;
		}
		$this->render('/moderator/profile', array('moderator'=>$moderator,'imageUrl'=>$imageUrl));
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

	public function actionEdit(){
		$this->layout = "moderator-inner";
		$imageUrl = "default_profile.gif";
		$moderatorModel = Moderator::model()->with('superuser')->findByPk(Yii::app()->session['user']['Username']);
		if($moderatorModel->superuser->Image != null){
			$imageUrl = $moderatorModel->superuser->Image;
		}
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/moderator/edit', array('moderatorModel'=> $moderatorModel, 'imageUrl'=>$imageUrl, 'superUser'=>$superUser));
	}

	//update moderator
	public function actionUpdate(){
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$moderator = Moderator::model()->findByPk(Yii::app()->session['user']['Username']);
		$moderator->attributes = $_POST['Moderator'];

		//var_dump($_FILES['SuperUser']['name']['Image']);
		
		if($_FILES['SuperUser']['name']['Image'] != ""){
			$filename = explode(".",$_FILES["SuperUser"]["name"]["Image"]);
			$filename[0] = "profile_".Yii::app()->session['user']['Username'];
			$newFilename = $filename[0].".".$filename[1];
			$superUser->Image = $newFilename;
			$superUser->image=CUploadedFile::getInstance($superUser,'Image');

			//var_dump($filename);
			//return;
            if($superUser->save())
            {
                $superUser->image->saveAs(Yii::app()->basePath.'/../uploads/propict/'.$newFilename);
            }	
		}
		$moderator->update();
		$this->redirect(Yii::app()->baseUrl.'/moderator/edit');
	}

	public function actionLogout(){
		Yii::app()->session->clear();
		$this->redirect(Yii::app()->baseUrl);
	}
}