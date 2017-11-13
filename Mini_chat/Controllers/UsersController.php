<?php 
class UsersController extends CoreController
{
	/*
	 * La fct connectionAction() permet de se connecter. Si l'utilisateur est déjà
	 * connecté (cad $_SESSION['status'] == 'connected' && !empty($_SESSION['user']))
	 * on le renvoit directement sur la page de son compte.
	 * Sinon on envoit une requete SQL grace a la fct connection() de UsersModel 
	 * pour verifier que les login et mdp correspondent a ceux en BDD.
	 */
	public function connectionAction()
	{
		if( !empty($this->GetData()['login']) && !empty($this->GetData()['password']) )
		{
			$login = htmlentities($this->GetData()['login']);
			$password = sha1(htmlentities($this->GetData()['password']));

			$user = $this->getModel()->connection( $login, $password )[0];

			if( $user != false )
			{
				$_SESSION['status'] = 'connected';
				$_SESSION['user'] = $user;
			}
		}

		$this->showLayout('useraccount');
	}

	public function deconnectionAction()
	{
		foreach ($_SESSION as $key => $value) {
			unset( $_SESSION[$key] );
		}
		
		$this->showLayout('main');
	}

	/*
	 * Une fois connecté et dirigé sur la page views/useraccount.php
	 * l'utilisateur peut afficher les autres utilisateurs hormis lui
	 * pour chater avec eux grace a la fct showMembersAction() qui utilise 
	 * la fct getAllUsersExceptUser() du model UsersModel.
	 */
	public function showMembersAction()
	{
		$users = $this->getModel()->getAllUsersExceptUser($_SESSION['user']['u_id']);

		$this->showLayout('members', $users);
	}

	public function showInscriptionAction()
	{
		$inscription = 'formulaire';
		$this->showLayout('formulaires', $inscription);
	}

	public function InscriptionAction()
	{
		$data = $this->GetData();
		$inscription = 'trial';

		if( !empty($data['fname']) && !empty($data['lname']) && !empty($data['login']) && !empty($data['password']) && !empty($data['passwordConf']) && !empty($data['email']))
		{

			$fname = htmlentities($data['fname']);
			$lname = htmlentities($data['lname']);
			$login = htmlentities($data['login']);
			$password = sha1(htmlentities($data['password']));
			$passwordConf = sha1(htmlentities($data['passwordConf']));
			$email = htmlentities($data['email']);

			$pattern_name = "#[a-zA-Zéè ]{2,20}#";
			$pattern_login = "#[a-zA-Zéè_]{6,20}#";
			$pattern_password = "#[^<>\\/]{6,15}#";

			if( preg_match($pattern_name, $fname) && preg_match($pattern_name, $lname) && preg_match($pattern_login, $login) && preg_match($pattern_password, $password) && filter_var($email, FILTER_VALIDATE_EMAIL) && $password == $passwordConf)
			{
				if( $this->getModel()->inscription( $fname, $lname, $login, $password, $email ) )
				{
					$inscription = true;
					$this->showLayout('main', $inscription);
				}
			}
		}

		$this->showLayout('formulaires', $inscription);
	}
}







?>