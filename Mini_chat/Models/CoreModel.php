<?php 
class CoreModel
{
	private static $spdo;

	public function __construct()
	{
		if( self::$spdo == null)
		{
			self::$spdo = new PDO('mysql:host='. DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8;', DB_USER, DB_PASS, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		}
	}

	protected function GetPdo()
	{
		return self::$spdo;
	}

	/*
	 * Permet de faire une requete sans récuperation de données.
	 * Retourne true ou false en fct de l'etat d'execution de la requete.
	 */
	protected function makeStatement( $sql, $params = [])
	{
		$rqt = $this->GetPdo()->prepare( $sql );

		if( $rqt != false )
		{
			$rqt -> execute( $params );
			return $rqt;
		}
		else
		{
			return false;
		}
	}

	/*
	 * Permet de faire un requete et de récuperer les données.
	 * Retourne false en cas d'echecs ou les données demandées en cas de succes.
	 */
	protected function makeSelect( $sql, $params = [] )
	{
		$rqt = $this->makeStatement( $sql, $params );

		$data = $rqt ->fetchAll( PDO::FETCH_ASSOC );

		if( !is_null($data) )
		{
			return $data;
		}
		else
		{
			return false;
		}
	}
}







?>