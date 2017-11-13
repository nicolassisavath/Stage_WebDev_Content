<?php 
class Accueil{
	private $_id;
	private $_presentation;

	public function __construct( $a, $b )
	{
		$this->_id = $a;
		$this->_presentation = $b;
	}

	public function SetPresentation( $a )
	{
		$this->_presentation = $a;
	}
}
?>