<?php 
class RealisationsModel extends CoreModel
{

	public function getAllRealisations()
	{
		$sql =
		'
			SELECT r_id, r_titre, r_description, r_image_descr_path, r_presta_link
			FROM realisations
		';

		$data = $this->MakeSelect( $sql );

		return $data;
	}

	public function getRealisation( $id_real )
	{
		$sql =
		'
			SELECT 
				i_id, 
				i_path, 
				r_id, 
				r_titre, 
				r_description, 
				r_image_descr_path, 
				r_presta_link
			FROM realisations
			RIGHT JOIN images_realisations ON r_id=r_id_fk
			WHERE r_id = :realisation_id
		';

		$params = ['realisation_id' => $id_real];
		$data = $this->MakeSelect( $sql, $params );

		return $data;
	}
}


?>

