<?php
class SiteContentService
{  var $s;
	public function __construct()
	  {
		  $this->s = DAOFactory::getTblContentDAO();
		  
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
        $error = SiteContentValidator::validate();
        
        if (count($error) == 0) {
            
            $d = new TblContent();
            if (isset($_FILES['image'])) {
                $destination = "images/sitecontent/" . $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $d->title   = $_POST['title'];
                $d->image   = $_FILES['image']['name'];
                $d->content = $_POST['content'];
                $this->s->insert($d);
            } else {
                $d->title   = $_POST['title'];
                $d->content = $_POST['content'];
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
       
        
        $d = new TblContent();
        
        $d->id = $_POST['id'];
        if (isset($_FILES['image'])) {
            $destination = "images/sitecontent/" . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $d->title   = $_POST['title'];
            $d->image   = $_FILES['image']['name'];
            $d->content = $_POST['content'];
            
        } else {
            $d->title   = $_POST['title'];
            $d->content = $_POST['content'];
            
            
        }
        
        $this->s->update($d);
        
    }
    
}
?>