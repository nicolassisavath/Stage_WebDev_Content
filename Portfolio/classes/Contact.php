<?php 

class Contact{
	private $_id;
	private $_fname;
	private $_lname;
	private $_text;
	private $_email;
	private $_tel;

	public function __construct( $a, $b, $c, $d,$e, $f )
	{
		$this->id = $a ;
		$this->fname = $b;
		$this->lname = $c;
		$this->text = $d;
		$this->email = $e;
		$this->tel = $f;
	}

	public function get_id(){
		return $this->_id;
	}

	public function get_fname(){
		return $this->_fname;
	}

	public function get_lname(){
		return $this->_lname;
	}

	public function get_text(){
		return $this->_text;
	}

	public function get_email(){
		return $this->_email;
	}

	public function get_tel(){
		return $this->_tel;
	}

}







?>