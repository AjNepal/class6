<?php	
	
	include_once("modules/boardmembers/service.php");
	class BoardmembersController{
		function execute()
		{
			$s=new BoardmembersService();
			//$m=new StudentModel();
			switch($_REQUEST['action'])
			{
				case 'add':
					if(isset($_POST['full_name']) && isset($_POST['title']) && isset($_POST['content'])){
							$s->add();
							$list=$s->getALL();
							include_once("modules/boardmembers/list.php");
							return;
						 }
					
					include_once("modules/boardmembers/form.php");
					break;
				case 'delete':
					$s->delete($_REQUEST['id']);
					$list=$s->getAll();
					include_once("modules/boardmembers/list.php");
					break;
				case 'update':
				    if(isset($_POST['full_name'] )&& isset($_POST['title']) && isset($_POST['content']))
					{
						$s->update();
						$list=$s->getAll();
						include_once("modules/boardmembers/list.php");
						return;
					}
					$f=$s->getById($_REQUEST['id']);
																
					include_once("modules/boardmembers/form.php");
				
					break;
					
				default:
				$list=$s->getAll();										
				include_once("modules/boardmembers/list.php");
				
			}
			
			
		}
		
	}



    $c=new BoardmembersController();
	$c->execute();	


?>