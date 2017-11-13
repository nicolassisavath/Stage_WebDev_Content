<?php 
class UsersModel extends CoreModel
{
	/*
	 * Permet de réaliser l'inscription en inserant les données saisies par l'utilisateur dans la BDD. 
	 * Le controle des données est effectué dans UsersController.
	 */
	public function inscription( $fname, $lname, $login, $password, $email )
	{
		$sql = 
		'
			INSERT INTO users
			( u_fname, u_lname, u_login, u_password, u_email )
			VALUES (:fname, :lname, :login, :password, :email )
		';

		$params = 
		[
			'fname' => $fname ,
			'lname' => $lname ,
			'login' => $login ,
			'password' => $password ,
			'email' => $email
		];

		return $this->makeStatement( $sql, $params );
	}
	/*
	 * La fct connection() verifie que les login et mdp correspondent a ceux en BDD.
	 * il retourne toute la ligne correspondante a l'id de l'utilisateur.
	 */
	public function connection( $login, $password )
	{
		$sql = 
		'
			SELECT * FROM users
			WHERE u_login = :login AND u_password = :password
		';

		$params = 
		[
			'login' => $login,
			'password' => $password
		];

		$user = $this->makeSelect( $sql, $params );

		if( count( $user ) == 1)
		{
			return $user;
		}
		else
		{
			return false;
		}
	}

	public function getAllUsers()
	{
		$sql = 
		'
			SELECT * FROM users
		';

		return $this->makeSelect( $sql );
	}

	/*
	 * Retourne ts les membres sauf l'utilisateur connecté.
	 * L'utilisateur peut voir avec qui il peut chatter.
	 */
	public function getAllUsersExceptUser($id_user)
	{
		$sql = 
		'
			SELECT * FROM users
			WHERE u_id != :id_user
		';

		$params = [ 'id_user' => $id_user ];

		return $this->makeSelect( $sql, $params );
	}

	/*
	 * Recupere et renvoie les données de l'utilisateur en fct de son id.
	 */
	public function getUser( $id_user )
	{
		$sql =
		'
			SELECT * FROM users
			WHERE u_id = :id_user
		';

		$params = [ 'id_user' => $id_user ];

		$user = $this->makeSelect( $sql, $params );

		if( count( $user ) == 1 )
		{
			return $user;
		}
		else
		{
			return false;
		}

	}

	public function updateUser()
	{

	}

	public function deleteUser()
	{

	}
}


?>