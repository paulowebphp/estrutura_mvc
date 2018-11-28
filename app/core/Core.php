<?php 

class Core
{

	private $controller;
	private $metodo;
	private $parametros = array();


	public function __construct()
	{
		$this->verificaUri();

	}#END __construct()



	public function run()
	{

		$controllerCorrente = $this->getController();

		# instancia uma Classe com o mesmo nome que a string Controller que está getController utilizando o conceito de Função Variável $controllerCorrente(), onde os parenteses são opcionais, como abaixo:
		$c = new $controllerCorrente;
		$c->lista();



	}#END run



	public function verificaUri()
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
			$this->controller = ucfirst($url[0]) . "Controller";

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

	}#END verificaUri



	public function getController()
	{
		return "app\\controllers\\".$this->controller;

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