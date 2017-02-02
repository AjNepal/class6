<?php
  include_once("modules/settings/model.php");
  include_once("modules/settings/service.php");

  /**
  * 
  */
  class SettingsController
  {
  	
  	function execute()
  	{
  		$s = new SettingsService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          print_r($_POST);
          if(isset($_POST['m_key']) && isset($_POST['value'])){
              
            $s -> add(); 
            $list = $s -> getAll();
            include_once("modules/settings/list.php"); 
            return;  
          }
          include_once("modules/settings/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/settings/list.php");          

          break;

          case 'update':

            if(isset($_POST['m_key'], $_POST['value'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/settings/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/settings/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/settings/list.php");
  		}
  	}
  }

  $c = new SettingsController();
  $c -> execute();

?>