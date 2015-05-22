<?php  

class Articles{

	public $id;
	public $title;
	public $article;

	public function get_all(){
	$sql = "SELECT * FROM `articles_table`";
	$db = new DB();
	return $db->query($sql,__CLASS__);
	}
	
	public function get_one($id){
		$sql = "SELECT * FROM `articles_table` WHERE `id`=".$id;
		$db = new DB();
		return $db -> query($sql,__CLASS__);
	
	}

}






?>