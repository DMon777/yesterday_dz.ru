<?php
function __autoload($class){

if(file_exists(__DIR__ ."/models/".$class.".php")){
	include __DIR__ ."/models/".$class.".php";
}
elseif(file_exists(__DIR__ ."/controllers/".$class.".php")){
	include __DIR__ ."/controllers/".$class.".php";
	}

}


?>