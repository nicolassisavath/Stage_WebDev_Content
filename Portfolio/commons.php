<?php 

function auto_load( $className )
{
	$folder = CLASSES_PATH;

	if( strpos( $className, 'Controller' ) !== false )
	{
		$folder = CONTROLLERS_PATH;
	}
	elseif ( strpos( $className, 'Model' ) !== false )
	{
		$folder = MODELS_PATH;
	}

	$filePath = $folder . DS . $className . '.php';

	if( file_exists( $filePath ))
	{
		require_once( $filePath );
	}
}
?>