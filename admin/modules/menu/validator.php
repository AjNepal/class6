<?php
class MenuValidator
{
	  static function validate()
	  {
		$error=array();
		   if($_POST['title']=='')
	         {
				 $error[]='Title is required';
			 }
			 if($_POST['link']=='')
	         {
				 $error[]='Link is required';
			 }
			return $error;
		
	  }
	  
}
?>