<?php

class ClientController extends Controller
{
	//fungsi init
	public function init(){
		//check user role
		if (false){
			$this->redirect('client/login');
		}
	}
	
	public function actionProfile(){
		if(!isset(Yii::app()->session['user'])){
			$this->redirect(Yii::app()->createUrl('/client/login'));
		}
		$userData = Yii::app()->session['user'];
		$client = Client::model()->findByPk($userData['Username']);

		//$thread = Thread::model()->with('komentar')->findAllByAttributes(array('Username'=>$userData['Username']));
		$thread = Thread::model()->with('komentar')->findAllByAttributes(array('Username'=>'cyntia.sani'));
		//var_dump($thread[0]->komentar);
		//$thread = Thread::model()->findAll("Username = '$client->Username'");
		$this->render('/client/profile', array('client'=>$client,'threads'=>$thread));

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
			$this->redirect(Yii::app()->createUrl('/client/profile'));
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

		$this->redirect(Yii::app()->createUrl('/client/login'));

	}

	//halaman edit client
	public function actionEdit($id){
		$threadModel = Thread::model()->findByPk($id);
		$this->render('/thread/edit', array('threadModel', $threadModel));
	}

	//update client
	public function actionUpdate($id){
		$newThred = Thread::model()->findByPk($id);
		$newThred->attributes = $_POST['Thread'];
		$newThred->Deskripsi = $_POST['deskripsi'];
		$newThred->Username = Yii::app()->session['client']['username'];
		$newThred->update();
	}

	//delete akun client
	public function actionDelete($id){
		Thread::model()->deleteAll('id=$id');
		Yii::app()->session['success_msg'] = "isi pesan";

	}

	public function actionView($id){
		$thread = Thread::model()->findByPk($id);
		$this->render('view', array('thread'=>$thread)); 
	}

}