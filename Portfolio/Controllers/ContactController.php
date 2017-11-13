<?php 
class ContactController extends CoreController
{
	public function showContactAction()
	{
		$this->showLayout('contact');
	}


	/*
	 * Permet aux visiteurs du portfolio l'envoi de questions. 
	 */
	public function sendContentAction()
	{
		$success = false;
		$data_content = $this->getData();

		$nom = htmlentities($data_content['nom']);
		$prenom = htmlentities($data_content['prenom']);
		$email = htmlentities($data_content['email']);
		$tel = htmlentities($data_content['tel']);
		$content = htmlentities($data_content['content']);

		$pattern_name = "#[a-zA-Zéè ]{2,40}#";
		$pattern_tel = "#[0-9 _.-]{10,20}#";
		$pattern_content = "#[\w éèêàù']{2,3000}#";

		if( preg_match($pattern_name, $nom) && preg_match($pattern_name, $prenom) && preg_match($pattern_tel, $tel) && preg_match($pattern_content, $content) && filter_var($email, FILTER_VALIDATE_EMAIL) )
		{
			$resp = $this->getModel()->addContact( $nom, $prenom, $email, $tel, $content );
			if( $resp == true )
			{
				$success = true ;
			}
		}

		$this->showLayout('contact', $success);
	}
}

?>