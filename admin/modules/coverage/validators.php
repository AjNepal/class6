<?php
	class CoverageValidator
	{	
		static function validate()
		{
			$error=array();
			if($_POST['location_name']=='')
			{
				$error[]='LocationName is Required';
			}
			if($_POST['lat']=='')
			{
				$error[]='Lattitude is Required';
			}
			if($_POST['lng']=='')
			{
				$error[]='Lattitude is Required';
			}
			if($_POST['infowindow_text']=='')
			{
				$error[]='InfoWindowText is Required';
			}
			return $error;
		}
		
		
	}


?>