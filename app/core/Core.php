<?php 

class Core
{

	public function run()
	{
		$url = $_SERVER["REQUEST_URI"];

		if( $url != "/" )
		{
			$url = explode('/', $url);
			# Remove primeiro item de um array
			array_shift($url);
		}#end if
		
		echo "<pre>";
		print_r($url);

	}#END run


}#END class Core

 ?>