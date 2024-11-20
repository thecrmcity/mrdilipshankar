<?php
$bsurl = dirname(__DIR__);

require_once("$bsurl/config/Database.php");
class Core
{

	

	public function __construct()
	{
		
		$this->application();
		$this->autoload();
	}
	public function application()
	{
		define("BASE_URL","http://localhost/dilip/");
		define("TITLE","Dilip Shankar Prajapati");
		define("US","/");
		define("APP",BASE_URL.'app'.US);
		define("PUB",BASE_URL.'public'.US);

		define("CONFIG",APP.'config'.US);
		define("CONTRL",APP.'controller'.US);
		define("CORE",APP.'core'.US);
		define("MODLS",APP.'models'.US);
		define("VIWS",APP.'views'.US);
		define("SOFT",APP.'software'.US);

		define("CSS",PUB.'css'.US);
		define("IMG",PUB.'images'.US);
		define("JS",PUB.'js'.US);

	}

	public function autoload()
	{
		spl_autoload_register(array(__CLASS__, 'load'));
	}

	public function load($classname)
	{
		switch($classname)
		{
			case "":
			require_once $this->bsurl."/contoller/".$classname.".php";
			break;
			case "":
			break;
			case "":
			break;
		}
	}
}
$obj = new Core();
?>