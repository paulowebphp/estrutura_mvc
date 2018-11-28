<?php 

namespace app\controllers;


class ProdutoController
{

	public function index()
	{
		echo "Metodo Index";
		echo "<br>";


	}#END index

	public function lista($valor = 10)
	{
		echo "Estou listando os produtos. Valor: R$ $valor";
		echo "<br>";


	}#END lista


}#END ProdutoController


 ?>