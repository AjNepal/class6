<?php

  class LinksService
  {
  	var $s;
		public function __construct()
		{
			$this -> s = DAOFactory::getTblLinksDAO();

		}
      function getAll()
	    {
	        
	        return $this -> s->queryAll();
	    }
	    
	  function getById($a)
	    {
	        return $this -> s->load($a);
	    }

  	 function add(){
  	 	$error = LinksValidator::validate();
        
        if (count($error) == 0) {
           
            $d = new TblLink();
            
            $d->title = $_POST['title'];
            $d->linkUrl = $_POST['link_url'];
            
            $this -> s->insert($d);
        }
        
        return $error;
  	 }

  	function delete($a){
       $this -> s -> delete($a);
  	}

  	function update(){
  		
		$d = new TblLink();

        $d->id = $_POST['id'];    
        $d->title = $_POST['title'];
        $d->linkUrl = $_POST['link_url'];
        
        $this -> s->update($d);

  	}

  }

?>