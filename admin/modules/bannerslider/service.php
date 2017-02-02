<?php
class BannerSliderService
{    var $s; 
      public function  __construct()
	   {
		$this->s = DAOFactory::getTblBannerDAO();
	   }
         function getAll()
		 {
			 
			 return $this->s->queryAll();
			 
	     }
		  function getById($a)
		 {
			 
			 return $this->s->load($a);
	     }
		 
		 function add()
	        {
				$error = BannerValidator::validate();
				 if (count($error) == 0) 
				 {
					$d= new TblBanner();
			   
					$d->title= $_POST['title'];
					$d->btnText= $_POST['btn_text'];
					$d->btnLink= $_POST['btn_link'];
					$d->mOrder= $_POST['m_order'];
					
					
					$this->s->insert($d);
				}
									
				return $error;
				
	        }
	   function delete($a)
	   {
		   
		   $this->s->delete($a);
	   }
		function update()
		{
		 $error = BannerValidator::validate();
          if (count($error) == 0) 
				{	
				$d= new TblBanner();
				
				$d->id= $_POST['id'];

				$d->title= $_POST['title'];
			    $d->btnText= $_POST['btn_text'];
			    $d->btnLink= $_POST['btn_link'];
			    $d->mOrder= $_POST['m_order'];
			
			
			   $this->s->update($d);
				}
				return $error;
		}
	
	
}


?>