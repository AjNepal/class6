<?php
  include_once("modules/students/model.php");
  include_once("modules/students/service.php");

  /**
  * 
  */
  class StudentsController
  {
  	
  	function execute()
  	{
  		$s = new StudentsService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          //print_r($_POST);
          if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
              
            $s -> add(); 
            $list = $s -> getAll();
            include_once("modules/students/list.php"); 
            return;  
          }
          include_once("modules/students/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/students/list.php");          

          break;

          case 'update':

            if(isset($_POST['name'], $_POST['email'], $_POST['phone'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/students/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/students/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/students/list.php");
  		}
  	}
  }

  $c = new StudentsController();
  $c -> execute();

?>