<?php
   
   class SocialValidator
   {
   	 static function validate(){

   	 	$error = array();
  	 	  if($_POST['social_media'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Social Media';
  	 	  }

  	 	  if($_POST['link'] == '')
  	 	  {
  	 	  	$error[] = 'Required field Link';
  	 	  }

  	 	  return $error;
   	 }
   }
?>