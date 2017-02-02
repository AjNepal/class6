<?php
	class SignupsValidator
	{	
		static function validate()
		{
			$error=array();
			if($_POST['email']=='')
			{
				$error[]='Email is Required';
			}
			if($_POST['signup_date']=='')
			{
				$error[]='SignupDate is Required';
			}
			return $error;
		}
		
		
	}


?>