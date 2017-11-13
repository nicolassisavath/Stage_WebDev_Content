<?php 
class AccueilModel extends CoreModel{

	/*
	 * Cette fct récupère les texte accueil.
	 * Il n'a qu'une ligne pour l'instant en BDD, mais il est imaginable que plusieurs textes de présentation pourront être utilisées ulterieurement. 
	 */
	public function GetAccueilText()
	{
		$sql = 
		'
			SELECT a_presentation
			FROM accueil
			WHERE a_id = 1
		';

		$data = $this->MakeSelect( $sql )[0];

		return $data;
	}

	/*
	 * On ne présente que les 5 dernières réalisations dans l'accueil
	 */
	public function GetAccueilRealisations()
	{
		$sql =
		'
			SELECT r_id, r_titre, r_description, r_image_descr_path, r_presta_link
			FROM realisations
			LIMIT 0, 5
		';

		$data = $this->MakeSelect( $sql );

		return $data;
	}
}



?>