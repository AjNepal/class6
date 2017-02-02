<?php
	
	include_once("modules/signups/validators.php");
	include_once("modules/signups/service.php");
	class SignupsController{
								function execute()
								{
									$s=new SignupsService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											
													$e=$s->add();
													if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=signups');
														exit();
													}
											//print_r($_POST);
											include_once("modules/signups/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/signups/list.php");
											break;
										case 'update':
										    
											 
											$e=$s->update();
											if(count($e)==0)
												{
													ob_end_clean();
													header('Location:index.php?page=signups');
													exit();
												}
											
											$f=$s->getById($_REQUEST['id']);
											include_once("modules/signups/form.php");
										
											break;
											
										default:
										$list=$s->getAll();
										include_once("modules/signups/list.php");
										
									}
									
									
								}
		
	}



    $c=new SignupsController();
	$c->execute();	


?>