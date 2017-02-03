<?php
class MenuService
{  
  var $s; 
  public function  __construct()
	{
		$this->s = DAOFactory::getTblMenuDAO();
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
		 $error = MenuValidator::validate();
         if (count($error) == 0) 
		{ 
            if (isset($_FILES['image'])) 
			{
                $destination = "images/menu/" . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
			 
		    
			$d= new TblMenu();
			$d->title=$_POST['title'];
			$d->link =$_POST['link'];
			$d->position=$_POST['position'];
			$d->image=$_FILES['image']['name'];
			
			
			$this->s->insert($d);
			 }
			 
			 
			 else
			 {
				 
			
			
			$d = new TblMenu();
			
			$d->title=$_POST['title'];
			$d->link =$_POST['link'];
			$d->position = $_POST['position'];
			$this->s->insert($d);
			 }	 
			 
		 }
	   
	    return $error;
	   
	   }
	
	 function delete($a)
	   {
		$this->s->delete($a);		
	   }
	function update()
		{
			 $error = MenuValidator::validate();
         if (count($error) == 0)
		 {
			$d = new TblMenu();

			$d->id =$_POST['id'] ;
			$d->title = $_POST['title'];
			$d->link = $_POST['link'];
			$d->position = $_POST['position'];
			$d->image = $_POST['image']['name'];
			
			$this->s->update($d);
		 }
		 
		 return $error;
		 
	   }
	
	
}


?>