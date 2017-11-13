<?php 
class ServicesController extends CoreController
{
	/*
	 * Présente ts les services
	 */
	function showServicesAction()
	{
		$data_services = $this->getModel()->displayServices();

		$this->showLayout('services', $data_services);

	}
}

?>