<?php
	class SiteContentService
	{
		function getAll()
		{	
			$sql="SELECT * FROM tbl_content";
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
			$sql="SELECT * FROM tbl_content WHERE id=$a";
			$rs=mysql_query($sql);
			$final=array();
			while($row=mysql_fetch_assoc($rs))
			{
				$final[]=$row;
			}
			return $final;
		}
		function add()
		{  if(isset($_FILES['image']))
			{
				$destination="images/sitecontent/".$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],$destination);
				$sql="INSERT INTO tbl_content(title,image,content) VALUES('".$_POST['title']."','".$_FILES['image']['name']."','".$_POST['content']."')";
			}
			else
			{
				$sql="INSERT INTO tbl_content(title,image,content) VALUES('".$_POST['title']."','".$_POST['content']."')";
		    }
			mysql_query($sql);
		}
		function delete($a)
		{
			$sql="DELETE FROM tbl_content WHERE id=$a";
			mysql_query($sql);
		}
		function update()
		{
			$sql="UPDATE tbl_content SET title='".$_POST['title']."',image='".$_POST['image']."',content='".$_POST['content']."'WHERE id=".$_POST['id'];
			//echo $sql;
			mysql_query($sql);
		}
		
	}
?>