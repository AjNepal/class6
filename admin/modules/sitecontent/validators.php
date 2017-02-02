<?php
	class SiteContentValidator
	{	
		static function validate()
		{
			$error=array();
			if($_POST['title']=='')
			{
				$error[]='Title is Required';
			}
			if($_POST['content']=='')
			{
				$error[]='Content is Required';
			}
			return $error;
		}
		
		
	}


?>