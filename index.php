
<?php 
require_once "autoload.php";

$class_name = isset($_GET['class_name']) ? $_GET['class_name'] : 'Article';
$method = isset($_GET['action']) ? $_GET['action'] : "All";

$class_name .= "_controller";
$method = "action".$method;
echo $method;

$object = new $class_name();
$object->$method();

 

?>

