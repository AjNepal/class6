<?php
class BannerValidator
{
	  static function validate()
	  {
		$error=array();
		   if($_POST['title']=='')
	         {
				 $error[]='Title is required';
			 }
			 if($_POST['btn_text']=='')
	         {
				 $error[]='Buttontext is required';
			 }
			return $error;
		
	  }
	  
}
?>