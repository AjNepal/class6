<?php
	
	include_once("modules/coverage/validators.php");
	include_once("modules/coverage/service.php");
	class CoverageController{
								function execute()
								{
									$s=new CoverageService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											
													$e=$s->add();
													if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=coverage');
														exit();
													}		
																		
											
											//print_r($_POST);
											include_once("modules/coverage/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/coverage/list.php");
											break;
										case 'update':
										    
												$e=$s->update();
												if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=coverage');
														exit();
													}	
											
											$f=$s->getById($_REQUEST['id']);
											include_once("modules/coverage/form.php");
										
											break;
											
										default:
										$list=$s->getAll();
										include_once("modules/coverage/list.php");
										
									}
									
									
								}
		
	}



    $c=new CoverageController();
	$c->execute();	


?>