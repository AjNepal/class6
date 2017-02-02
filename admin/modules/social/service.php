<?php

class SocialService
{
	var $s;
	public function __construct()
	{
		$this -> s = DAOFactory::getTblSocialDAO();

	}
    function getAll()
    {
        
        return $this -> s->queryAll();
    }
    
    function getById($a)
    {
        return $this -> s->load($a);
    }
    
    
    function add()
    {
        
        $error = SocialValidator::validate();
        
        if (count($error) == 0) {
           
            $d = new TblSocial();
            
            $d->socialMedia = $_POST['social_media'];
            $d->link        = $_POST['link'];
            
            $this -> s->insert($d);
        }
        
        return $error;
        
    }
    
    function delete($a)
    {
        
        $this -> s -> delete($a);
    }
    
    function update()
    {
        
        $d = new TblSocial();
        
        $d->id          = $_POST['id'];
        $d->socialMedia = $_POST['social_media'];
        $d->link        = $_POST['link'];
        
        $this -> s -> update($d);
        
    }
    
}

?>