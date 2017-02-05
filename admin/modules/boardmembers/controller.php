<?php
include_once("modules/boardmembers/service.php");
include_once("modules/boardmembers/validator.php");

class BoardmembersController{
			function execute()
				{
				$s=new BoardmembersService();
				
				switch($_REQUEST['action'])
				{
					case 'add':

					$e=$s->add();
					if(count($e)==0)
					{
						ob_end_clean();
						header('Location:index.php?page=boardmembers');
						exit();
					}	
						
						include_once("modules/boardmembers/form.php");
						break;
					case 'delete':
						$s->delete($_REQUEST['id']);
						$list=$s->getAll();
						include_once("modules/boardmembers/list.php");
						break;
					case 'update':
						$e=$s->update();
						if(count($e)==0)
						{
							ob_end_clean();
							header('Location:index.php?page=boardmembers');
							exit();
						}	
						/*if(isset($_POST['full_name'] )&& isset($_POST['title']) && isset($_POST['content']))
					{
						/*$s->update();
						$list=$s->getAll();
						include_once("modules/boardmembers/list.php");
						return;
					}*/
					
					$f=$s->getById($_REQUEST['id']);
				  include_once("modules/boardmembers/form.php");
				
					break;
					
				default:
				$list=$s->getAll();		
//print_r($list);				
				include_once("modules/boardmembers/list.php");
				
			}
			
			
		}

	}



    $c=new BoardmembersController();
	$c->execute();	


?>