<?php 
class CoreModel{
	private static $spdo;

	/*
	 * Le constructeur du coreModel génère un objet pdo qu'à le première instanciation de coreModel (singleton pattern).
	 */
	public function __construct()
	{
		if ( self::$spdo == NULL )
		{
			self::$spdo = new PDO('mysql:host='. DB_HOST . ';dbname='. DB_NAME . ';charset=utf8;', DB_LOGIN, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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
	public function MakeStatement( $sql, $params = [] )
	{
		if( count( $params ) == 0)
		{
			$rqt = self::GetPdo()->query($sql);
		}
		else
		{
			if( $rqt = self::GetPdo()->prepare($sql) )
			{
				$rqt -> execute( $params );
			}
		}
		return $rqt;
	}

	/*
	 * Permet de faire un requete et de récuperer les données.
	 * Retourne false en cas d'echecs ou les données demandées en cas de succes.
	 */
	public function MakeSelect( $sql, $params = [] )
	{
		$rqt = $this-> MakeStatement( $sql, $params );

		if( $data = $rqt -> fetchAll( PDO :: FETCH_ASSOC ))
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