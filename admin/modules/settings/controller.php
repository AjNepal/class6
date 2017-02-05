<?php
	
	include_once("modules/settings/validators.php");
	include_once("modules/settings/service.php");
	class SettingsController{
								function execute()
								{
									$s=new SettingsService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
						
													$e=$s->add();
													if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=settings');
														exit();
													}			
																	 
											//print_r($_POST);
											include_once("modules/settings/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/settings/list.php");
											break;
										case 'update':
										 /*if(isset($_POST['m_key']) && isset($_POST['value']))
											{
												$s->update();
												$list=$s->getAll();
												include_once("modules/settings/list.php");
												return;
											}
										     */
												$e=$s->update();
												if(count($e)==0)
													{
														ob_end_clean();
														header('Location:index.php?page=settings');
														exit();
													}
									
											$f=$s->getById($_REQUEST['id']);
											include_once("modules/settings/form.php");
										
											break;
											
										default:
										$list=$s->getAll();
										include_once("modules/settings/list.php");
										
									}
									
									
								}
		
	}



    $c=new SettingsController();
	$c->execute();	


?>