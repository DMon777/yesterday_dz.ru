<?php 

class DB{

public $name = 'dima';

public function __construct(){
mysql_connect("localhost","root","","articles_base");
mysql_select_db("articles_base");
mysql_query("SET NAMES utf8");
}

public function query($sql,$class_name){
$ret_arr = array();
$result = mysql_query($sql);
while($row = mysql_fetch_object($result,$class_name)){
	$ret_arr[] = $row;
	
}
return $ret_arr;

}


}



?>