<?php
include_once("modules/menu/validator.php");
include_once("modules/menu/service.php");

class MenuController						
{
     function execute()
     {
		$s= new MenuService();
      		
		switch ($_REQUEST['action'])
				{ 
				  case 'add':
				    $e=$s->add();
					if(count($e)==0)
					{
						ob_end_clean();
						header('Location:index.php?page=menu');
						exit();
					}	
						
						include_once("modules/menu/form.php");
						break;
				  case 'delete':
						$s->delete($_REQUEST['id']);
						$list= $s->getAll();
						include_once("modules/menu/list.php");
						break;
				  case 'update':
				       $e=$s->update();
						if(count($e)==0)
						{
						ob_end_clean();
						header('Location:index.php?page=menu');
						exit();
						}
						$f=$s->getById($_REQUEST['id']);
																
						include_once("modules/menu/form.php");
						break;						

						
				default:
				     $list= $s->getAll();					 
		             include_once("modules/menu/list.php");
		 
		        }
		 
	 }		 
	
	
	
}
      $c= new MenuController();
	  $c->execute();
			
?>