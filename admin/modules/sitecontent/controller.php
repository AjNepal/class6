<?php
	
	
	include_once("modules/sitecontent/service.php");
	include_once("modules/sitecontent/validators.php");
	class SiteContentController{
								function execute()
								{
									$s=new SiteContentService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											
													$e=$s->add();
													if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=sitecontent');
														exit();
													}				 
											//print_r($_POST);
											include_once("modules/sitecontent/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/sitecontent/list.php");
											break;
										case 'update':
										    if(isset($_POST['title']) && isset($_POST['content']))
											{
												$s->update();
												$list=$s->getAll();
												include_once("modules/sitecontent/list.php");
												return;
											}
											$f=$s->getById($_REQUEST['id']);
											include_once("modules/sitecontent/form.php");
										
											break;
											
										default:
										$list=$s->getAll();
										include_once("modules/sitecontent/list.php");
										
									}
									
									
								}
		
	}



    $c=new SiteContentController();
	$c->execute();	


?>