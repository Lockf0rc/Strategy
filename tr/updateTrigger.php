<?php
//updateTrigger.php
function __autoload($class_name){
	include '../'.$class_name;
}
$trigger=new Client();
$trigger->changeData();
?>
