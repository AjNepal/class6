<?php
  include_once("modules/social/model.php");
  include_once("modules/social/service.php");

  /**
  * 
  */
  class SocialController
  {
  	
  	function execute()
  	{
  		$s = new SocialService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          print_r($_POST);
          if(isset($_POST['social_media']) && isset($_POST['link'])){
              
            $s -> add(); 
            $list = $s -> getAll();
            include_once("modules/social/list.php"); 
            return;  
          }
          include_once("modules/social/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/social/list.php");          

          break;

          case 'update':

            if(isset($_POST['social_media'], $_POST['link'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/social/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/social/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/social/list.php");
  		}
  	}
  }

  $c = new SocialController();
  $c -> execute();

?>