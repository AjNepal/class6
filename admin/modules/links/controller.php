<?php
  include_once("modules/links/service.php");
  include_once("modules/links/validator.php");

  class LinksController
  {
  	
  	function execute()
  	{
  		$s = new LinksService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          //print_r($_POST);
              
            $e = $s -> add(); 
            if(count($e) == 0) {
              ob_end_clean();
              header('Location:index.php?page=links');
              exit();
            } 

          include_once("modules/links/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/links/list.php");          

          break;

          case 'update':

            if(isset($_POST['title'], $_POST['link_url'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/links/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/links/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/links/list.php");
  		}
  	}
  }

  $c = new LinksController();
  $c -> execute();

?>