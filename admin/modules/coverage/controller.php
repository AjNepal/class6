<?php
	
	include_once("modules/coverage/model.php");
	include_once("modules/coverage/service.php");
	class CoverageController{
								function execute()
								{
									$s=new CoverageService();
									//$m=new StudentModel();
									switch($_REQUEST['action'])
									{
										case 'add':
											if(isset($_POST['location_name']) && isset($_POST['lat']) && isset($_POST['lng']) && isset($_POST['infowindow_text'])){
																		$s->add();
																		$list=$s->getALL();
																		include_once("modules/coverage/list.php");
																		return;
																	 }
											print_r($_POST);
											include_once("modules/coverage/form.php");
											break;
										case 'delete':
											$s->delete($_REQUEST['id']);
											$list=$s->getAll();
											include_once("modules/coverage/list.php");
											break;
										case 'update':
										    if(isset($_POST['location_name'] )&& isset($_POST['lat']) && isset($_POST['lng']) && isset($_POST['infowindow_text']))
											{
												$s->update();
												$list=$s->getAll();
												include_once("modules/coverage/list.php");
												return;
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