<?php 

class CoreController{
	private $parameters;
	private $data;
	private $model;

	public function __construct()
	{
		$this->parameters = [];
		$this->data = [];

		$controllerClassName = get_class($this);
		$controllerName = substr($controllerClassName, 0, -10);
		$modelName = $controllerName.'Model';
		$this->model = new $modelName();
	}

	public function getModel()
	{
		return $this->model;
	}

	/*
	 * Permet de presenter le layout avec la vue correspondante $view et les données correspondantes $data.
	 */
	public function showLayout( $viewname, $data = [] )
	{
		ob_start();
			include( VIEWS_PATH . DS . $viewname . '.php');
			$view = ob_get_contents();
		ob_end_clean();

		include( VIEWS_PATH . DS . 'layout.php');
	}

	/*
	 * Retourne directement les parameters ( cad $_GET, voir fichier index ).
	 * Cela permet aux controllers d'accéder directement à $_GET.
	 */
	public function getParams()
	{
		return $this->parameters;
	}

	/*
	 * Retourne directement les data ( cad $_POST, voir fichier index ).
	 * Cela permet aux controllers d'accéder directement à $_POST.
	 */
	public function getData()
	{
		return $this->data;
	}

	public function setParams(array $a)
	{
		$this->parameters = $a;	
	}

	public function setData(array $a)
	{
		$this->data = $a;
	}

	/*
	 * Permet d'appeler l'action à partir de son nom : nom_de_laction.'Action' dans le controller. 
	 * L'insertion dans l'url ($_GET) du nom de l'action a la clé 'a' enclenche l'appele de l'action (voir index).
	 */
	public function Trigger($a)
	{
		$actionName = $a.'Action';

		if(method_exists($this, $actionName))
		{
			$this->$actionName();
		}
		else
		{
			http_response_code(404);
			include(VIEWS_PATH . DS . 'page404.php');
			exit();
		}
	}
}
?>