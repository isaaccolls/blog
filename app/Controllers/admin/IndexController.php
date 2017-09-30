<?php
namespace App\Controllers\Admin;

use App\models\User;
use App\Controllers\BaseController;

class IndexController extends BaseController{

	public function getIndex(){
		if(isset($_SESSION['userID'])){
			$userID = $_SESSION['userID'];
			$user = User::find($userID);

			if($user){
				return $this->render('admin/index.twig', ['user'=>$user]);
			}
		}
		header('Location: ' . BASE_URL . 'auth/login');
	}
}
?>