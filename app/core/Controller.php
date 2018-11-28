<?php 
namespace app\core;

class Controller
{

	public function load($viewName)
	{

		//extract($viewDados);
		include "app/views/". $viewName . ".php";

	}#END load
	
}#END class Controller


 ?>