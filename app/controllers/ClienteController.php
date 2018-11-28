<?php 

namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller
{

	public function lista()
	{
		echo "Estou listando os clientes";
		echo "<br>";


	}#END lista



	public function ver()
	{
		$dados["nome"] = "Mjailton";
		$dados["email"] = "mjailto@gmail.com";
		$this->load("v_cliente", $dados);

	}#END ver


}#END ClienteController


 ?>