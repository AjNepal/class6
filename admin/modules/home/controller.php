<?php

  class homeController
  {
  	
  	function execute()
  	{
  		//$s = new CategoryService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {
  			
  			default:
  				//$list = $s -> getAll();

  				include_once("modules/home/list.php");

  		}
  	}
  }

  $c = new homeController();
  $c -> execute();

?>