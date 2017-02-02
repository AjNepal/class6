<?php

  class SocialService
  {
      function getById($a){
      	
		$sql = "SELECT * FROM tbl_social where id=$a";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }



  	  function getAll(){
  	  	
		$sql = "SELECT * FROM tbl_social";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }

  	 function add(){
  	 	
		$sql = "INSERT INTO tbl_social(social_media, link) VALUES ('".$_POST['social_media']."', '".$_POST['link']."')";
		mysql_query($sql);
		echo $sql;
  	 }

  	function delete($a){
  		
		$sql = "DELETE FROM tbl_social where id = $a";
		mysql_query($sql);
		//echo "Complete";
  	}

  	function update(){
  		
		//$sql = "UPDATE tb SET title='".$_POST['title']."' where id = ".$_POST['id'];
		$sql = "UPDATE tbl_social SET social_media='".$_POST['social_media']."', link='".$_POST['link']."' where id = ".$_POST['id'];
		//echo $sql;
		mysql_query($sql);

  	}

  }

?>