<?php 
class DiscussionsModel extends CoreModel
{
	/*
	 * Stocke les données relatives au message envoyé entre le sender et le receiver dans la BDD.
	 */
	public function sendMessage( $sender, $receiver, $content )
	{
		$sql =
		'
			INSERT INTO discussions
			( d_sender, d_receiver, d_content, d_date)
			VALUES ( :sender, :receiver, :content, :date_time)
		';

		$date = date("Y-m-d G:i:s");

		$params = 
		[
			'sender' => $sender,
			'receiver' => $receiver,
			'content' => $content,
			'date_time'	=> $date
		];

		$this->makeStatement( $sql, $params );
	}

	/*
	 * Retourne les 30 derniers messages de la discussion entre le sender/user et le receiver.
	 */
	public function displayDiscussion( $id_user, $id_receiver)
	{
		$sql = 
		'
			SELECT sender.u_login as sender, receiver.u_login as receiver, d_content, d_date
			FROM discussions
			INNER JOIN users sender ON sender.u_id = d_sender
			INNER JOIN users receiver ON receiver.u_id = d_receiver
			WHERE (d_sender=:id_user AND d_receiver=:id_receiver) OR (d_sender=:id_receiver AND d_receiver=:id_user)
			ORDER BY d_id DESC
			LIMIT :min, :max
		';

		$rqt = $this->getPdo()->prepare( $sql );

		$rqt->bindValue(':id_user', $id_user, PDO::PARAM_INT);
		$rqt->bindValue(':id_receiver', $id_receiver, PDO::PARAM_INT);
		$rqt->bindValue(':min', 0, PDO::PARAM_INT);
		$rqt->bindValue(':max', 30, PDO::PARAM_INT);

		$rqt->execute();

		$data = $rqt-> fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
}

?>