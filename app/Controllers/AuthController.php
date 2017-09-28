<?php
namespace App\Controllers;

class AuthController extends BaseController{

	public function getIndex(){
		return $this->render('login.twig');
	}
}
?>