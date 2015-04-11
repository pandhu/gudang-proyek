<?php

class ClientController extends Controller
{
	//fungsi init
	public function init(){
		//check user role
		$this->layout = "client-inner";
		if (false){
			$this->redirect('client/login');
		}
	}
	
	public function actionProfile(){
		if(!isset(Yii::app()->session['user'])){
			$this->redirect(Yii::app()->createUrl('/client/login'));
		}
		$userData = Yii::app()->session['user'];
		$client = Client::model()->with('superuser')->findByPk($userData['Username']);
		$imageUrl = "default_profile.gif";
		if($client->superuser->Image != null){
			$imageUrl = $client->superuser->Image;
		}
		//$thread = Thread::model()->with('komentar')->findAllByAttributes(array('Username'=>$userData['Username']));
		$thread = Thread::model()->with('komentar')->findAllByAttributes(array('Username'=>'cyntia.sani'));
		//var_dump($thread[0]->komentar);
		//$thread = Thread::model()->findAll("Username = '$client->Username'");
		$this->render('/client/profile', array('client'=>$client,'threads'=>$thread, 'imageUrl'=>$imageUrl));

	}

	public function actionIndex(){
		$thread = Thread::model();
		var_dump($thread->attributes);
	}

	public function actionLogin(){
		if (isset($_POST['SuperUser'])){
			$user = SuperUser::model()->findByPk($_POST['SuperUser']['Username']);
			$userPass = $user->Password;
			if($userPass == md5($_POST['SuperUser']['Password']))
			var_dump($userPass);
			Yii::app()->session['user'] = $user->attributes;
			$this->redirect(Yii::app()->baseUrl.'/client/profile');
		}
		$userModel = SuperUser::model();
		$this->render('/client/login', array('userModel'=>$userModel));
	}

	//membuat akun klien baru
	public function actionCreate(){

		$clientModel = Client::model();
		$this->render('/client/register', array('clientModel'=>$clientModel));
	}

	//menyimpan client baru
	public function actionSave(){
		// validation here
		// if username not available return error 	

		$newClient = new Client;
		$superUser = new SuperUser;

		$superUser->Username = $_POST['Client']['Username'];
		$superUser->Password = md5($_POST['password']);
		$superUser->Role = 'Client';
		$superUser->save(false);

		$newClient->attributes = $_POST['Client'];
		$newClient->Username = $_POST['Client']['Username'];
		var_dump($_POST['Client']);
		var_dump($newClient->attributes);
		$newClient->save(false);
		//insert session for success msg here

		$this->redirect(Yii::app()->baseUrl.'/client/login');

	}

	//halaman edit client
	public function actionEdit(){
		$clientModel = Client::model()->with('superuser')->findByPk(Yii::app()->session['user']['Username']);
		$imageUrl = "default_profile.gif";
		if($clientModel->superuser->Image != null){
			$imageUrl = $clientModel->superuser->Image;
		}
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$this->render('/client/edit', array('clientModel'=> $clientModel, 'superUser'=>$superUser, 'imageUrl'=>$imageUrl));
	}

	//update client
	public function actionUpdate(){
		$superUser = SuperUser::model()->findByPk(Yii::app()->session['user']['Username']);
		$client = Client::model()->findByPk(Yii::app()->session['user']['Username']);
		$client->attributes = $_POST['Client'];
		if(count($_POST["SuperUser"])>0){
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
		$client->update();
		$this->redirect(Yii::app()->baseUrl.'/client/edit');
	}

	//delete akun client
	public function actionDelete($id){
		Thread::model()->deleteAll('id=$id');
		Yii::app()->session['success_msg'] = "isi pesan";

	}

	public function actionLogout(){
		Yii::app()->session->clear();
		$this->redirect(Yii::app()->baseUrl);
	}
}