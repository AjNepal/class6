<?php
  include_once("modules/category/model.php");
  include_once("modules/category/service.php");

  /**
  * 
  */
  class categoryController
  {
  	
  	function execute()
  	{
  		$s = new CategoryService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          //print_r($_POST);
          if(isset($_POST['title']) && isset($_POST['price'])){
              
            $s -> add(); 
            $list = $s -> getAll();
            include_once("modules/category/list.php"); 
            return;  
          }
          include_once("modules/category/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/category/list.php");          

          break;

          case 'update':

            if(isset($_POST['title'], $_POST['price'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/category/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/category/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/category/list.php");
  		}
  	}
  }

  $c = new categoryController();
  $c -> execute();

?>