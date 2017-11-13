<?php 
class ContactModel extends CoreModel
{
	public function addContact( $nom, $prenom, $email, $tel, $content )
	{
		$sql = 
		"
			INSERT INTO contacts
			( c_nom, c_prenom, c_email, c_tel, c_content )
			VALUES
			( :nom, :prenom, :email, :tel, :content )
		";

		$params = 
		[
			'nom' => $nom,
			'prenom' => $prenom,
			'email' => $email,
			'tel' => $tel,
			'content' => $content
		];

		if( $this->makeStatement( $sql, $params ))
		{
			return true;
		}
		else
		{
			return flase;
		}
	}
}

?>