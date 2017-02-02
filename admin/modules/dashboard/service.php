<?php

  class CategoryService
  {
      function getById($a){
      	
		$sql = "SELECT * FROM tb where id=$a";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }



  	  function getAll(){
  	  	
		$sql = "SELECT * FROM tb";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }

  	 function add(){
  	 	
		$sql = "INSERT INTO tb(title, price) VALUES ('".$_POST['title']."', '".$_POST['price']."')";
		mysql_query($sql);
		//echo "Complete";
  	 }

  	function delete($a){
  		
		$sql = "DELETE FROM tb where id = $a";
		mysql_query($sql);
		//echo "Complete";
  	}

  	function update(){
  		
		//$sql = "UPDATE tb SET title='".$_POST['title']."' where id = ".$_POST['id'];
		$sql = "UPDATE tb SET title='".$_POST['title']."', price='".$_POST['price']."' where id = ".$_POST['id'];
		//echo $sql;
		mysql_query($sql);

  	}

  }

?>