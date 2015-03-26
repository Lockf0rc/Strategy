<?php
//findTrigger.php
function __autoload($class_name){
include '../'.$class_name;
}
$trigger= new Client();
$trigger->findData();
?>
