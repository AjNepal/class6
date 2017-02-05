<?php
	class SettingsService
	{
		var $s;
		public function __construct()
		{
			 $this->s = DAOFactory::getTblSettingsDAO();
			
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
		{   $error = SettingsValidator::validate();
        
			if (count($error) == 0)
			{	
				$d = new TblSetting();
				$d -> mKey = $_POST['m_key'];
				$d -> value = $_POST['value'];
				$this->s -> insert($d);
			}
			return $error;
		}
		function delete($a)
		{
			 $this->s->delete($a);
		}
		function update()
		{
			$error = SettingsValidator::validate();
        
			if (count($error) == 0)
			{	
				$d = new TblSetting();
				$d->id =$_POST['id'] ;
				$d -> mKey= $_POST['m_key'];
				$d -> value = $_POST['value'];
				$this->s -> update($d);
			}
			return $error;
		}
		
	}
?>