<?php
	class CoverageService
	{
		function getAll()
		{	
			$sql="SELECT * FROM tbl_coverage";
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
			$sql="SELECT * FROM tbl_coverage WHERE id=$a";
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
			$sql="INSERT INTO tbl_coverage(location_name,lat,lng,infowindow_text) VALUES('".$_POST['location_name']."','".$_POST['lat']."','".$_POST['lng']."','".$_POST['infowindow_text']."')";
		    mysql_query($sql);
			
		}
		function delete($a)
		{
			$sql="DELETE FROM tbl_coverage WHERE id=$a";
			mysql_query($sql);
		}
		function update()
		{
			$sql="UPDATE tbl_coverage SET LocationName='".$_POST['location_name']."',lat='".$_POST['lat']."',lng='".$_POST['lng']."',infowindow_text='".$_POST['infowindow_text']."'WHERE id=".$_POST['id'];
			//echo $sql;
			mysql_query($sql);
		}
		
	}
?>