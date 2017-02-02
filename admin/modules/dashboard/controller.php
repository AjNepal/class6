<?php

  class DashboardController
  {
  	
  	function execute()
  	{
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

  			default:
  				include_once("modules/dashboard/list.php");
  		}
  	}
  }

  $c = new DashboardController();
  $c -> execute();

?>