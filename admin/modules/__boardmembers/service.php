<?php

  class BoardMembersService
  {
      function getById($a){
      	
		$sql = "SELECT * FROM tbl_board_members where id=$a";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }



  	  function getAll(){
  	  	
		$sql = "SELECT * FROM tbl_board_members";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }

  	 function add(){
  	 	
		$sql = "INSERT INTO tbl_board_members(full_name, title, image, content) VALUES ('".$_POST['full_name']."', '".$_POST['title']."', '".$_POST['image']."', '".$_POST['content']."')";
		mysql_query($sql);
		//echo $sql;
  	 }

  	function delete($a){
  		
		$sql = "DELETE FROM tbl_board_members where id = $a";
		mysql_query($sql);
		//echo "Complete";
  	}

  	function update(){
  		
		//$sql = "UPDATE tb SET title='".$_POST['title']."' where id = ".$_POST['id'];
		$sql = "UPDATE tbl_board_members SET full_name='".$_POST['full_name']."', title='".$_POST['title']."', image='".$_POST['image']."', content='".$_POST['content']."' where id = ".$_POST['id'];
		//echo $sql;
		mysql_query($sql);

  	}

  }

?>