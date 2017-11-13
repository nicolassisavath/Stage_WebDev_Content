<?php 
	include ('useraccount.php');
?>
<div class="members">
	<table>
		<thead>
			<tr>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Status</th>
				<th>Discuter</th>
			</tr>
		</thead>
		<tbody>

	<?php 
	// Montre les utilisateurs à l'exception de l'utilisateur.
	foreach ( $data as $element ) 
	{
		echo 
		'
			<tr>
				<th>'.$element["u_fname"].'</th>
				<th>'.$element["u_lname"].'</th>
				<th>'.$element["u_status"].'</th>
				<th><a href="?c=discussions&a=showDiscussion&id_receiver='.$element['u_id'] .'" target="_blank">Envoyer un Message</a></th>
			</tr>
		';
	}
	?>
		</tbody>
	</table>
</div>
