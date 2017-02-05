<?php
	class SettingsValidator
	{	
		static function validate()
		{
			$error=array();
			if($_POST['m_key']=='')
			{
				$error[]='mKey is Required';
			}
			if($_POST['value']=='')
			{
				$error[]='value is Required';
			}
			return $error;
		}
		
		
	}


?>