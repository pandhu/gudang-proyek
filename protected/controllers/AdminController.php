<?php

class AdminController extends Controller
{
	//fungsi init
	public function init(){
		//check user role
		$this->layout = "admin-inner";
		if (false){
			$this->redirect('admin/login');
		}
	}

	public function actionProfile(){
		$userData = Yii::app()->session['user'];
		$admin = Admin::model()->with('superuser')->findByPk($userData['Username']);
		$imageUrl = "default_profile.gif";
		if($admin->superuser->Image != null){
			$imageUrl = $admin->superuser->Image;
		}
		
		//$admin = Admin::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/admin/profile', array('admin'=>$admin, 'imageUrl'=>$imageUrl));
	}
	public function actionLogin(){
		$this->layout = "moderator-login";
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

	public function actionEdit(){
		$adminModel = Admin::model()->with('superuser')->findByPk(Yii::app()->session['user']['Username']);
		$imageUrl = "default_profile.gif";
		if($adminModel->superuser->Image != null){
			$imageUrl = $adminModel->superuser->Image;
		}
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/admin/edit', array('adminModel'=> $adminModel, 'superUser'=>$superUser, 'imageUrl'=>$imageUrl));
	}

	//update client
	public function actionUpdate(){
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$admin = Admin::model()->findByPk(Yii::app()->session['user']['Username']);
		$admin->attributes = $_POST['Admin'];

		if($_FILES['SuperUser']['name']['Image'] != ""){
			$filename = explode(".",$_FILES["SuperUser"]["name"]["Image"]);
			$filename[0] = "profile_".Yii::app()->session['user']['Username'];
			$newFilename = $filename[0].".".$filename[1];
			$superUser->Image = $newFilename;
			$superUser->image=CUploadedFile::getInstance($superUser,'Image');

            if($superUser->save())
            {
                $superUser->image->saveAs(Yii::app()->basePath.'/../uploads/propict/'.$newFilename);
            }	
		}
		$admin->update();
		$this->redirect(Yii::app()->baseUrl.'/admin/edit');
	}
	public function actionModeratorlist(){
		$moderators = Moderator::model()->with('superuser')->findAll();
		$this->render('moderator_list', array('moderators'=>$moderators));
	}
	public function actionDeletemod($id){
		
		Pengumuman::model()->deleteAll("Username = :username", array("username"=>$id));
		Komentar::model()->deleteAll("Username = :username", array("username"=>$id));
		Moderator::model()->deleteAll("Username = :username", array("username"=>$id));
		SuperUser::model()->deleteAll("Username = :username", array("username"=>$id));
		$this->redirect(Yii::app()->baseUrl."/admin/moderatorlist");
	}
	public function actionLogout(){
		Yii::app()->session->clear();
		$this->redirect(Yii::app()->baseUrl);
	}

	public function actionAddModerator(){
		//$user = Yii::app()->session['user'];
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
			//$moderator->Username = $_POST['Moderator']['Username'];

			//var_dump($moderator->attributes);
			$moderator->save(false);
			$this->redirect(Yii::app()->baseUrl.'/listmoderator');
			return;
		}
		//var_dump($moderator);
		$moderator = Moderator::model();
		$this->render('/admin/add_moderator', array('moderatorModel'=>$moderator));
	}

}