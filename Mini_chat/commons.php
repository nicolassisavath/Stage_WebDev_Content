<?php 

function autoLoad( $className)
{
	$folder = CLASSES_PATH;

	if( strpos($className, 'Controller') != false)
	{
		$folder = CONTROLLERS_PATH;
	}
	elseif( strpos($className, 'Model') != false)
	{
		$folder = MODELS_PATH;
	}

	$fileName = $folder . DS . $className . '.php';

	if( file_exists( $fileName))
	{
		include( $fileName );
	}
}

spl_autoload_register('autoLoad');




?>