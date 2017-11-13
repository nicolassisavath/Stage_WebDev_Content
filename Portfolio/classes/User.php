<?php 
class User{
	private $_id;
	private $_login;
	private $_pwd;
	private $_status;

	public function __construct( $a, $b, $c, $d )
	{
		$this->_id = $a;
		$this->_login = $b;
		$this->_pwd = $c;
		$this->_status = $d;
	}

	public function GetId()
	{
		return $this->_id;
	}	

	public function GetLogin()
	{
		return $this->_login;
	}

	public function GetPwd()
	{
		return $this->_pwd;
	}

	public function GetStatus()
	{
		return $this->_status;
	}

	// a retravailler pour gerer l'acteur et la cible
	public function SetStatus( $a )
	{
		$this->_status = $a;
	}


}










?>