<?php 

/*
 * Fct utilisé dans ../views/useraccount.php pour afficher 
 * les données de l'utilisateur connecté. Le parametre $user 
 * est fourni par UsersController lors de l'appel de
 * l'action/la fonction connectionAction().
 */
function displayUser( $user )
{
	$data_user = 
	'	
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>fname</th>
					<th>lname</th>
					<th>login</th>
					<th>password</th>
					<th>email</th>
					<th>status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>'.$user['u_id'].'</th>
					<th>'.$user['u_fname'].'</th>
					<th>'.$user['u_lname'].'</th>
					<th>'.$user['u_login'].'</th>
					<th>'.$user['u_password'].'</th>
					<th>'.$user['u_email'].'</th>
					<th>'.$user['u_status'].'</th>
				</tr>
			</tbody>
		</table>
	';

	return $data_user;
}








?>