<?php
require_once "./src/Money.php";
function __autoload($class_name) {
	include $class_name . '.php';
}

$obj = new Money();
?>
