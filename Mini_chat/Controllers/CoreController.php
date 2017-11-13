<?php 
class CoreController
{
	private $params;
	private $data;
	private $model;

	/*
	 * Le model correspondant au controller est directement instancié
	 * lors de la construction du controller. Le controller lui, est construit
	 * dans l'index.
	 */
	public function __construct()
	{
		$controllerName = get_class( $this );
		$modelName = substr( $controllerName, 0, -10 ) . 'Model'; //10 est la longueur de 'controller'
		$this->model = new $modelName();
	}

	public function showLayout( $viewname, $data = [] )
	{
		ob_start();
			include ( VIEWS_PATH . DS . $viewname . '.php' );
			$view = ob_get_contents();
		ob_end_clean();

		include ( VIEWS_PATH . DS . 'layout.php' );
	}

	protected function getModel()
	{
		return $this->model;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setParams( array $a )
	{
		$this->params = $a;
	}

	public function setData( array $a )
	{
		$this->data = $a;
	}

	/*
	 * Fonction trigger($actionName) permet d'appeler la fct portant
	 * le nom actionNameAction dans le controller correspondant
	 * si la fct appelée n'existe pas, alors on revoit vers une page 404
	 */
	public function trigger( $actionName )
	{
		$action = $actionName . 'Action';

		if( method_exists( $this, $action ) )
		{
			$this->$action();
		}
		else
		{
			http_response_code( 404 );
			include( VIEWS_PATH . DS . 'page404.php');
		}
	}
}





?>