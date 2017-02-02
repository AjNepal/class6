<?php
	class CoverageService
	{
		var $s;
		public function __construct()
		{
			 $this->s = DAOFactory::getTblCoverageDAO();
			
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
			$error = CoverageValidator::validate();
        
			if (count($error) == 0)
			{
				$d = new TblCoverage();
				
				$d -> locationName = $_POST['location_name'];
				$d -> lat = $_POST['lat'];
				$d -> lng = $_POST['lng'];
				$d -> infowindowText = $_POST['infowindow_text'];
				
				$this->s->insert($d);
			}
				return $error;
				
		}
		
		function delete($a)
		{
			
			$this->s->delete($a);
		}
		
		function update()
		{	$error = CoverageValidator::validate();
        
			if (count($error) == 0)
			{
				$d = new TblCoverage();
				$d->id =$_POST['id'] ;
				$d -> locationName = $_POST['location_name'];
				$d -> lat = $_POST['lat'];
				$d -> lng = $_POST['lng'];
				$d -> infowindowText = $_POST['infowindow_text'];
				$this->s->update($d);
			}
			return $error;
		}
	}
?>