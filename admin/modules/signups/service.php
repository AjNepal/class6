<?php
	class SignupsService
	{
		var $s;
		public function __construct()
		{
			 $this->s = DAOFactory::getTblSignupsDAO();
			
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
			$error = SignupsValidator::validate();
        
			if (count($error) == 0)
			{
				$d = new TblSignup();
				$d -> email = $_POST['email'];
				$d -> signupDate= $_POST['signup_date'];
				$this->s->insert($d);
			}
			return $error;
			
		}
		
		function delete($a)
		{
			
			$this->s->delete($a);
		}
		
		function update()
		{
			$error = SignupsValidator::validate();
        
			if (count($error) == 0)
			{
			
				$d = new TblSignup();
				
				$d->id =$_POST['id'] ;
				$d -> email = $_POST['email'];
				$d ->signupDate  = $_POST['signup_date'];
				$this->s->update($d);
			}
			return $error;
		}
		
	}
?>