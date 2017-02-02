<?php
class BoardmembersService
{  var $s; 
  public function  __construct()
	{
		$this->s = DAOFactory::getTblBoardMembersDAO();
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
        $error = BoardMembersValidator::validate();
        if (count($error) == 0) 
		{
            if (isset($_FILES['image'])) 
			{
                $destination = "images/boardmembers/" . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                
                $d = new TblBoardMember();
                
                $d->fullName = $_POST['full_name'];
                $d->title= $_POST['title'];
                $d->image= $_FILES['image']['name'];
                $d->content= $_POST['content'];
                
                $this->s->insert($d);
            } 
			else {
                
                $d = new TblBoardMember();
                
                $d->fullName= $_POST['full_name'];
                $d->title= $_POST['title'];
                //$d -> image = $_FILES['image'][''name];
                $d->content= $_POST['content'];
                
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
        $error = BoardMembersValidator::validate();
        
		if (count($error)==0)
		{
        $d = new TblBoardMember();
        
        $d->id= $_POST['id'];
        $d->fullName= $_POST['full_name'];
        $d->title= $_POST['title'];
        $d->image= $_FILES['image']['name'];
        $d->content= $_POST['content'];
        
       $this->s->update($d);
		}
		{
	    return $error;
		}
    }
    
}
?>