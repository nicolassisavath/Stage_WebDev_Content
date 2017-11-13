<?php 
class Realisation{
	private $_id; 
	private $_titre; 
	private $_description; 
	private $_titre_presta; 
	private $_image_descr; 
	private $_link_presta; 
	private $_img_dossier; 

	public function __construct( $a, $b, $c, $d, $e, $f, $g)
	{
		$this->_id = $a;
		$this->_titre = $b;
		$this->_description = $c;
		$this->_titre_presta = $d;
		$this->_image_descr = $e;
		$this->_link_presta = $f;
		$this->_img_dossier = $g;
	}

	public function GetId(){
		return $this->_id;
	}

	public function GetTitre(){
		return $this->_titre;
	}

	public function GetDescription(){
		return $this->_description;
	}

	public function GetTitrePresta(){
		return $this->_titre_presta;
	}

	public function GetImageDescr(){
		return $this->_image_descr;
	}

	public function GetLinkPresta(){
		return $this->_link_presta;
	}

	public function GetImgDossier(){
		return $this->_img_dossier;
	}

}








?>