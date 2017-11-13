<?php 
if( isset($data) )
{
	if( $data == 'formulaire' || $data == 'trial' )
	{
?>
<div class="inscription_form">
	<form action="?c=users&a=inscription" method="POST"><br>
		<input type="text" name="fname" placeholder="first name"><br>
		<input type="text" name="lname" placeholder="last name"><br>
		<input type="text" name="login" placeholder="login"><br>
		<input type="password" name="password" placeholder="password between 6 and 15 characters"><br>
		<input type="password" name="passwordConf" placeholder="repeat your password"><br>
		<input type="text" name="email" placeholder="email"><br>
		<input type="submit">
	</form>
</div>
<?php
	}
	else if( $data == true )
	{
		echo 'Votre inscription a bien fonctionné';
	}
	if( $data == 'trial')
	{
		echo 'Votre inscription a échoué';
	}
}
?>
