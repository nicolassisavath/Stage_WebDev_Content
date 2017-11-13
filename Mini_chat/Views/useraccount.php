<div class="useraccount">
<?php 
	if( !empty($_SESSION['status']) && $_SESSION['status'] == 'connected' )
	{
?>
	<p>Vous etes connecté</p>

	<table>
		<thead>
			<tr>
				<th>fname</th>
				<th>lname</th>
				<th>login</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><?=$_SESSION['user']['u_fname']   ?></th>
				<th><?=$_SESSION['user']['u_lname']   ?></th>
				<th><?=$_SESSION['user']['u_login']   ?></th>
				<th><?=$_SESSION['user']['u_email']   ?></th>
			</tr>
		</tbody>
	</table>
	<br>
	
	<a href="?c=users&a=showMembers">See members</a>
<?php
	}
	else
	{
?>
	<p>La connection a échouée'</p>
<?php
	}
?>
</div>


