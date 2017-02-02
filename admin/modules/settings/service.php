<?php

  class SettingsService
  {
      function getById($a){
      	
		$sql = "SELECT * FROM tbl_settings where id=$a";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }



  	  function getAll(){
  	  	
		$sql = "SELECT * FROM tbl_settings";
		$rs = mysql_query($sql);
        
        $final = array();

		while($row = mysql_fetch_assoc($rs))
		{
			$final[] = $row;
		}
		return $final;
  	  }

  	 function add(){
  	 	
		$sql = "INSERT INTO tbl_settings(m_key, value) VALUES ('".$_POST['m_key']."', '".$_POST['value']."')";
		mysql_query($sql);
		echo $sql;
  	 }

  	function delete($a){
  		
		$sql = "DELETE FROM tbl_settings where id = $a";
		mysql_query($sql);
		//echo "Complete";
  	}

  	function update(){
  		
		//$sql = "UPDATE tb SET title='".$_POST['title']."' where id = ".$_POST['id'];
		$sql = "UPDATE tbl_settings SET m_key='".$_POST['m_key']."', value='".$_POST['value']."' where id = ".$_POST['id'];
		//echo $sql;
		mysql_query($sql);

  	}

  }

?>