<?php
	
	include_once("modules/sitecontent/model.php");
	include_once("modules/sitecontent/service.php");
	class SiteContentController{
								function execute()
								{
									$s=new SiteContentService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											if( isset($_POST['title']) && isset($_POST['content'])){
																		$s->add();
																		$list=$s->getALL();
																		include_once("modules/sitecontent/list.php");
																		return;
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
										    if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content']))
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