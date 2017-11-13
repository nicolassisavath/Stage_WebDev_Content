<?php 
class Service{
	private $_id;
	private $_service;
	private $_titre;
	private $_description;
	private $_image;

	public function __construct( $a, $b, $c, $d, $e)
	{
		$this->_id = $a;
		$this->_service = $b;
		$this->_titre = $c;
		$this->_description = $d;
		$this->_image = $e;
	}

	public function GetId(){
		return $this->_id;
	}

	public function GetService(){
		return $this->_service;
	}

	public function GetTitre(){
		return $this->_titre;
	}

	public function GetDescription(){
		return $this->_description;
	}

	public function GetImage(){
		return $this->_image;
	}
}
?>