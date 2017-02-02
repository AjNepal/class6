<?php

  class StudentsService
  {
      function getById($a){
      	
		$sql = "SELECT * FROM tbl_student where id=$a";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }



  	  function getAll(){
  	  	
		$sql = "SELECT * FROM tbl_student";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }

  	 function add(){
  	 	
		$sql = "INSERT INTO tbl_student(name, email, phone) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."')";
		mysql_query($sql);
		//echo $sql;
  	 }

  	function delete($a){
  		
		$sql = "DELETE FROM tbl_student where id = $a";
		mysql_query($sql);
		//echo "Complete";
  	}

  	function update(){
  		
		//$sql = "UPDATE tb SET title='".$_POST['title']."' where id = ".$_POST['id'];
		$sql = "UPDATE tbl_student SET name='".$_POST['name']."', email='".$_POST['email']."', phone='".$_POST['phone']."' where id = ".$_POST['id'];
		//echo $sql;
		mysql_query($sql);

  	}

  }

?>