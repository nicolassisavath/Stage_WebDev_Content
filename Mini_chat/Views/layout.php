<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<header>
	<a href="?c=main&a=showMain"><h1>MINI CHAT</h1></a>

	<?php 
	// On ne présente les formulaires de connection et d'inscription que si l'utilisateur n'est pas déjà connecté.
	if( empty($_SESSION['status']) || $_SESSION['status'] != 'connected' )
	{
	?>
<!-- ******* FORMULAIRE DE CONNECTION ET D'INSCRIPTION *** -->
	<div class="forms">

		<div class="connection_form">
			<form action="?c=users&a=connection" method="POST">
				<input type="text" name="login" placeholder="login">
				<input type="password" name="password" placeholder="password"><br>
				<input type="submit" name="connection_form" value="Connection">
			</form>
		</div>

		<div class="showInscription_form">
			<form action="?c=users&a=showInscription" method="POST">
				<input type="submit" name="show_inscription_form" value="Inscription">
			</form>
		</div>

	</div>
<!-- *** FIN DE FORMULAIRE DE CONNECTION ET D'INSCRIPTION*** -->
	<?php
	}
	else
	{
	?>
	<div class="user_data">
		<p><?= $_SESSION['user']['u_login']; ?></p>		
		<p><?= $_SESSION['user']['u_fname'].' '.$_SESSION['user']['u_lname']; ?></p>		
		<a href="?c=users&a=deconnection">Deconnection</a>
	</div>
	<?php 
	}
	?>
</header>

<section>
	<?=$view?>
</section>

<footer>
	FOOTER
</footer>

</body>
</html>