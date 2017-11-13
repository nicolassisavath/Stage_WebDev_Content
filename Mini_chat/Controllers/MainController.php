<?php 
class MainController extends CoreController
{
	/*
	 * La fct showMainAction() est l'action par defaut du menu accueil. Si l'utilisateur est déjà
	 * connecté (cad $_SESSION['status'] == 'connected' && !empty($_SESSION['user']))
	 * on le renvoit directement sur la page de son compte.
	 * Sinon on affiche la page main
	 */
	public function showMainAction()
	{
		if( !empty( $_SESSION['status'] ) && $_SESSION['status'] == 'connected' )
		{
			$this->showLayout('useraccount', $_SESSION['user']);
		}
		else
		{
			$this->showLayout('main');
		}
	}


}





?>