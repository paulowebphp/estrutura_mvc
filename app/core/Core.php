<?php 

class Core
{

	private $controller;
	private $metodo;
	private $parametros = array();


	public function run()
	{
		$url = $_SERVER["REQUEST_URI"];

		if( $url != "/" )
		{
			# colocando as partes da url num array
			$url = explode('/', $url);
			
			# array_shift() remove primeiro item de um array
			# ucfirst() coloca primeira letra em maiúsculas
			array_shift($url);

			# Criando controller
			$this->controller = ucfirst($url[0]) . "Controller.php";

			array_shift($url);// tirando um elemento do array para passar para o Método

			# Criando Metodo
			if( isset($url[0]) )
			{

				$this->metodo = $url[0];
				array_shift($url);// tirando um elemento do array para passar para os Parâmetros

			}#end if
			
			# Criando Parametros
			if( isset($url[0]) )
			{

				# array_filter() pega só os valores VÁLIDOS de um array, ou seja, se tiver elementos vazios ele percebe automaticamente e forma um array com o que tiver no momento
				$this->parametros = array_filter($url);

			}#end if
			

		}#end if
		else
		{
			# tirando a barra do inicio da $_SERVER["REQUEST_URI"]
			$this->controller = "IndexController.php";

		}#end else
		
		//echo "<pre>";
		//print_r($url);


	}#END run



	public function getController()
	{
		return $this->controller;

	}#END getController



	public function getMetodo()
	{
		return $this->metodo;

	}#END getMetodo



	public function getParametros()
	{
		return $this->parametros;

	}#END getParametros



}#END class Core

 ?>