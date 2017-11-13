<?php 
class ServicesModel extends CoreModel
{
	public function displayServices()
	{
		$sql = 
		'
			SELECT 
				s_id, 
				s_service, 
				s_titre, 
				s_description, 
				s_image_descr_path
			FROM services
		';

		return $this->makeselect( $sql );
	}

	public function displayService( $id_service)
	{
		$sql = 
		'
			SELECT 
				s_id, 
				s_service, 
				s_titre, 
				s_description, 
				s_image_descr_path
			FROM services
			WHERE s_id = :id_service
		';

		$params = [ 'id_service' => $id_service ];

		return $this->makeSelect( $sql );
	}
}

?>