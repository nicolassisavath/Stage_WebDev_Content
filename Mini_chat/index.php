<?php 
	session_start();

require('init.php');
require('commons.php');

// require(VIEWS_PATH . DS . 'display_functions'. DS .'functions.php');

$params_init =
[
	'c' => 'main',
	'a' => 'showMain'
];
$params = array_merge($params_init, $_GET);

$controllerName = ucfirst($params['c']).'Controller';

$controller = new $controllerName();

$controller->setParams($_GET);
$controller->setData($_POST);

$controller->trigger($params['a']);


?>