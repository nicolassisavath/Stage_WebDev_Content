<?php 


require_once('config.php');
require_once('commons.php');

spl_autoload_register('auto_load');

$params_init = 
[
	'c' => DEFAULT_CONTROLLER,
	'a' => DEFAULT_ACTION
];

// Array merge permet d'ecraser les valeurs des clés du  tableau en permier argument, par celles du second argument. Ainsi le controller et l'action par défaut seront écrasés si on les spécifie dans l'url.
$params = array_merge($params_init, $_GET);

$controllerName = ucfirst($params['c']).'Controller';

$controller = new $controllerName();

/* 
setParams() et setData() permettent respectivement d'envoyer $_GET et $_POST dans le controller, rendant ces données accessibles de celui-ci.
*/
$controller->setParams($_GET);
$controller->setData($_POST);

/*
Trigger() permet d'appeler l'action à partir de la valeur de $params['a']. 
(voir coreController).
*/
$controller->Trigger($params['a']);






















?>