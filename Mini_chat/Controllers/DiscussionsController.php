<?php 
class DiscussionsController extends CoreController
{


	/*
	 * Lorsque l'utilisateur envoit un message, le contenu du message est envoyé
	 * à la BDD par requete SQL en utilisant la fct sendMessage ds DiscussionsModel.
	 * La discussion est tout de suite réactualisée et affichée 
	 * en appelant à la fin la fct/l'action showDiscussionAction() .
	 */
	public function sendMessageAction()
	{
		$content = $this->getData()['content'];
		$id_receiver = $this->getParams()['id_receiver'];

		$id_user = $_SESSION['user']['u_id'];

		$this->getModel()->sendMessage( $id_user, $id_receiver, $content);

		$this->showDiscussionAction();
	}

	/*
	 * Lorsque l'utilsateur veut envoyer un message a un membre choisi (receiver).
	 * L'id du receiver est envoyé via l'url et recupéré ds la variable $id_receiver
	 * pr recuperer les données du receiver. On recupere les données de la discussion
	 * ds la variable $discussion grace a la fct displayDiscussion() du model DiscussionsModel.
	 */
	public function showDiscussionAction()
	{
		$id_user = $_SESSION['user']['u_id'];
		$id_receiver = $this->getParams()['id_receiver'];

		$usersModel = new usersModel();
		$data['userReceiver'] = $usersModel->getUser( $id_receiver )[0];

		$data['discussion'] = $this->getModel()->displayDiscussion( $id_user, $id_receiver );

		$this->showLayout('discussion', $data);
	}
}


?>