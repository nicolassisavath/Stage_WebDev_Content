<?php 
class Users
{
	private $_id;
	private $_fname;
	private $_lname;
	private $_login;
	private $_password;
	private $_email;
	private $_status;

	public function __construct( $id, $fname, $lname, $login, $password, $email, $status )
	{
		$this->_id = $id ;
		$this->_fname = $fname ;
		$this->_lname = $lname ;
		$this->_login = $login ;
		$this->_password = $password ;
		$this->_email = $email ;
		$this->_status = $status ;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getFname()
	{
		return $this->_fname;
	}

	public function getLname()
	{
		return $this->_lname;
	}

	public function getLogin()
	{
		return $this->_login;
	}

	public function getPassword()
	{
		return $this->_password;
	}

	public function getEmail()
	{
		return $this->_email;
	}

	public function getStatus()
	{
		return $this->_status;
	}





}







?>