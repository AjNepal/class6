<?php
include_once("modules/bannerslider/validator.php");
include_once("modules/bannerslider/service.php");

class BannerSliderController						
{
     function execute()
     {
		$s= new BannerSliderService();
      		
		switch ($_REQUEST['action'])
				{ 
				  case 'add':
				 

					$e=$s->add();
					if(count($e)==0)
					{
						ob_end_clean();
						header('Location:index.php?page=bannerslider');
						exit();
					}	
						
						include_once("modules/bannerslider/form.php");
						break;
				  case 'delete':
						$s->delete($_REQUEST['id']);
						$list= $s->getAll();
						include_once("modules/bannerslider/list.php");
						break;
				case 'update':
				       

					$e=$s->update();
					if(count($e)==0)
					{
						ob_end_clean();
						header('Location:index.php?page=bannerslider');
						exit();
					}	
						
					
					$f=$s->getById($_REQUEST['id']);
					
                    include_once("modules/bannerslider/form.php");
					break;
				 default:
				     $list= $s->getAll();					 
		             include_once("modules/bannerslider/list.php");
		 
		        }
		 
	 }		 
	
	
	
}
      $c= new BannerSliderController();
	  $c->execute();
?>