<?php 
class AccueilController extends CoreController
{
	public function showAccueilAction()
	{
		$data['text'] = $this->getModel()->GetAccueilText();
		
		$data['real'] = $this->getModel()->GetAccueilRealisations();

		$this->showLayout('accueil', $data);
	}
}

?>