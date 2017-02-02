<?php
class BoardMembersValidator
{
	  static function validate()
	  {
		$error=array();
		   if($_POST['full_name']=='')
	         {
				 $error[]='Fullname is required';
			 }
			 if($_POST['title']=='')
	         {
				 $error[]='Title is required';
			 }
			return $error;
		
	  }
	  
}
?>