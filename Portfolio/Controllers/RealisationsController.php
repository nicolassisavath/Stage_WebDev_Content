<?php 
class RealisationsController extends CoreController
{
	/*
	 * Présente ttes les réalisations
	 */
	public function showRealisationsAction()
	{
		$data_realisations = $this->getModel()->getAllRealisations();

		$this->showLayout('realisations', $data_realisations);		
	}

	/*
	 * Présente la réalisation sélectionnée
	 */
	public function showRealisationAction()
	{
		$data_realisation = $this->getModel()->getRealisation( $this->GetParams()['r_id'] );

		$this->showLayout('realisation', $data_realisation);		
	}
}


?>