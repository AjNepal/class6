<?php
	class SignupsService
	{
		function getAll()
		{	
			$sql="SELECT * FROM tbl_signups";
			$rs=mysql_query($sql);
			$final=array();
			while($row=mysql_fetch_assoc($rs))
			{
				$final[]=$row;
			}
			return $final;
		}
		function getById($a)
		{	
			$sql="SELECT * FROM tbl_signups WHERE id=$a";
			$rs=mysql_query($sql);
			$final=array();
			while($row=mysql_fetch_assoc($rs))
			{
				$final[]=$row;
			}
			return $final;
		}
		function add()
		{   
			$sql="INSERT INTO tbl_signups(email,signup_date) VALUES('".$_POST['email']."','".$_POST['signup_date']."')";
		    mysql_query($sql);
			
		}
		function delete($a)
		{
			$sql="DELETE FROM tbl_signups WHERE id=$a";
			mysql_query($sql);
		}
		function update()
		{
			$sql="UPDATE tbl_signups SET email='".$_POST['email']."',signup_date='".$_POST['signup_date']."'WHERE id=".$_POST['id'];
			//echo $sql;
			mysql_query($sql);
		}
		
	}
?>