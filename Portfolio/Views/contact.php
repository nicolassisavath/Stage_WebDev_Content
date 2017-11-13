<section class="contact">
	<h2>Contact</h2>

	<?php 
	if( isset( $data ) && $data == true )
	{
		echo 'Le message a été envoyé avec succès !<br>';
	}
	else if( isset( $data ) && $data === false )
	{
		echo 'L\'envoi du message a echoué.<br>';
	}
	?>
	<div class="coordonnees">
		<h3>Mes Coordonnées</h3>
		<strong>Nicolas Sisavath</strong><br>
		06 67 30 15 00<br>
		<a href="mailto:nicolas.sisavath1@gmail.com">nicolas.sisavath1@gmail.com</a><br>
		30 Avril 1986 (31ans)<br>
		Français<br>
	</div>

	<div class="contact_form">
		<h3>Me contacter</h3>
		<form action="?c=contact&a=sendContent" method="POST">
			<input type="text" name="nom" placeholder="Entrez Votre Prénom"><br>
			<input type="text" name="prenom" placeholder="Entrez Votre Nom"><br>
			<input type="text" name="email" placeholder="Entrez Votre Email"><br>
			<input type="text" name="tel" placeholder="Entrez Votre Téléphone (facultatitf)"><br>
			<textarea name="content" cols="40" rows="10" placeholder="Entrez Votre Message"></textarea><br>

			<input type="submit" value="Envoyer">
		</form>
	</div>

</section>
