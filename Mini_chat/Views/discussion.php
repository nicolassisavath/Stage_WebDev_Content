<h2><?=$data['userReceiver']['u_fname'].' '.$data['userReceiver']['u_lname']?></h2>
<div class="current_discussion">
	<p id="discussion_container">

<?php  
	// Affichage des 30 derniers messages entre le user et le receiver.
	// Pour afficher le message le plus récent en bas, on utilise array_reverse().
	foreach ( array_reverse( $data['discussion'] ) as $element ) 
	{
		//On attribue un couleur differente pr les 2 chateurs grace a $class_sender.
		$class_sender = ($element['sender'] != $data['discussion'][0]['sender'])? 'sender_blue': 'sender_green';

		$date_table = explode(' ', $element['d_date']);
		$date = $date_table[0];
		$heure = $date_table[1];

		echo 
		'
			<b><span class="'.$class_sender.'">'.$element['sender'].'</span> a envoyé le '.$date.' à '.$heure.' : </b>'
			.$element['d_content'].'<br>
		';
	}
?>
	</p>
</div>

<form action="?c=discussions&a=sendMessage&id_receiver=<?= $data['userReceiver']['u_id'] ?>" method="POST">
	<textarea name="content" rows="5" cols="30" placeholder="Tapez votre message">
	</textarea><br>
	<input type="submit" name="send_message" value="Send Message">
</form>

