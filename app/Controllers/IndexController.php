<?php
namespace App\controllers;

use App\models\BlogPost;

class IndexController extends BaseController{

	public function getIndex(){
		$blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();
		return $this->render('index.twig', ['blogPosts'=>$blogPosts]);
	}
}
?>