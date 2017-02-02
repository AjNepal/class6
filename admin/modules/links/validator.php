<?php
   
   class LinksValidator
   {
   	 static function validate(){

   	 	$error = array();
  	 	  if($_POST['title'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Social Media';
  	 	  }

  	 	  if($_POST['link_url'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Link';
  	 	  }

  	 	  return $error;
   	 }
   }
?>