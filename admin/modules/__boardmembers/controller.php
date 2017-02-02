<?php
  include_once("modules/boardmembers/service.php");

  /**
  * 
  */
  class BoardMembersController
  {
  	
  	function execute()
  	{
  		$s = new BoardMembersService();
  		//$m = new CategoryModel();

  		switch ($_REQUEST['action']) {

        case 'add':
          //print_r($_POST);
          if(isset($_POST['full_name']) && isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content'])){
              
            $s -> add(); 
            $list = $s -> getAll();
            include_once("modules/boardmembers/list.php"); 
            return;  
          }
          include_once("modules/boardmembers/form.php");
          break;

          case 'delete':
            $s -> delete($_REQUEST['id']);

            $list = $s -> getAll();

            include_once("modules/boardmembers/list.php");          

          break;

          case 'update':

            if(isset($_POST['full_name'], $_POST['title'], $_POST['image'], $_POST['content'])){
              
              $s -> update();
              $list = $s -> getAll();
              include_once("modules/boardmembers/list.php");
              return;
            }

            $f = $s-> getById($_REQUEST['id']);

            //echo "<pre>";
            //print_r($f);

            include_once("modules/boardmembers/form.php");
            break;
  			
  			default:
  				$list = $s -> getAll();

  				include_once("modules/boardmembers/list.php");
  		}
  	}
  }

  $c = new BoardMembersController();
  $c -> execute();

?>