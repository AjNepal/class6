<?php
	
	include_once("modules/signups/model.php");
	include_once("modules/signups/service.php");
	class SignupsController{
								function execute()
								{
									$s=new SignupsService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											if(isset($_POST['email']) && isset($_POST['signup_date'])){
																		$s->add();
																		$list=$s->getALL();
																		include_once("modules/signups/list.php");
																		return;
																	 }
											print_r($_POST);
											include_once("modules/signups/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/signups/list.php");
											break;
										case 'update':
										    if(isset($_POST['email'] )&& isset($_POST['signup_date']))
											{
												$s->update();
												$list=$s->getAll();
												include_once("modules/signups/list.php");
												return;
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