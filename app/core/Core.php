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
			
			# Criando controller
			# array_shift() remove primeiro item de um array
			array_shift($url);
			$this->controller = $url[0];
			
			# Criando Metodo
			array_shift($url);
			$this->metodo = $url[0];
			
			# Criando Parametros
			array_shift($url);
			# array_filter() pega só os valores VÁLIDOS de um array, ou seja, se tiver elementos vazios ele percebe automaticamente e forma um array com o que tiver no momento
			$this->parametros = array_filter($url);



		}#end if
		
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