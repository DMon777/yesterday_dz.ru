<?php 

class Article_controller{

	public function actionAll(){
		$articles = new Articles();
		$art_obj = $articles -> get_all();
		include __DIR__ ."/../views/view_all_articles.php";
	}
	
	public function actionOne(){
		$id = $_GET['id'];
		$articles = new Articles();
		$art_obj = $articles -> get_one($id);
		include __DIR__ ."/../views/view_one_article.php";
	}


}


?>