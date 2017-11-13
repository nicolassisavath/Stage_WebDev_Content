<?php 
class Discussions
{
	private $_id;
	private $_sender;
	private $_receiver;
	private $_content;
	private $_date;

	public function __construct( $id, $sender, $receiver, $content, $date )
	{
		$this->_id = $id;
		$this->_sender = $sender;
		$this->_receiver = $receiver;
		$this->_content = $content;
		$this->_date = $date;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getSender()
	{
		return $this->_sender;
	}

	public function getReceiver()
	{
		return $this->_receiver;
	}

	public function getContent()
	{
		return $this->_content;
	}

	public function getDate()
	{
		return $this->_date;
	}
}

?>