<?php
	class BoardmembersService
	{
		function getAll()
		{	
			$s = DAOFactory::getTblBoardMembersDAO();
			
			return $s->queryAll();
			/*
			$sql="SELECT * FROM tbl_board_members";
			$rs=mysql_query($sql);
			$final=array();
			while($row=mysql_fetch_assoc($rs))
			{
				$final[]=$row;
			}
			return $final;*/
		}
		function getById($a)
		{	
			$s = DAOFactory::getTblBoardMembersDAO();
			return $s->load($a);
		}
		function add()
		{   
		
			$s = DAOFactory::getTblBoardMembersDAO();
			
			$d = new TblBoardMember();
			
			
			if(isset($_FILES['image']))
		  	 	{
		  	 		$destination="images/boardmembers/" . $_FILES['image']['name'];
		  	 		move_uploaded_file($_FILES['image'][tmp_name], $destination);

		  	 		$d -> fullName = $_POST['full_name'];
					$d -> title = $_POST['title'];
					$d -> image = $_FILES['image']['name'];
					$d -> content = $_POST['content'];
		  	 	}
		  	 	else{
		  	 		$d -> fullName = $_POST['full_name'];
					$d -> title = $_POST['title'];
					$d -> content = $_POST['content'];
				}

				$s -> insert($d);
		
			/*$sql="INSERT INTO tbl_board_members(full_name,title,image,content) VALUES('".$_POST['full_name']."','".$_POST['title']."','".$_POST['image']."','".$_POST['content']."')";
		    mysql_query($sql);
			*/
			
		}
		function delete($a)
		{
			$s = DAOFactory::getTblBoardMembersDAO();
			$s->delete($a);
			//$sql="DELETE FROM tbl_board_members WHERE id=$a";
			//mysql_query($sql);
		}
		function update()
		{
			$s = DAOFactory::getTblBoardMembersDAO();
			
			$d = new TblBoardMember();
			
			$d->id =$_POST['id'] ;
						
			if(isset($_FILES['image']))
		  	 	{

		  	 		$destination="images/boardmembers/" . $_FILES['image']['name'];
		  	 		move_uploaded_file($_FILES['image'][tmp_name], $destination);

		  	 		$d -> fullName = $_POST['full_name'];
					$d -> title = $_POST['title'];
					$d -> image = $_FILES['image']['name'];
					$d -> content = $_POST['content'];

		  	 	}
		  	 	else{
		  	 		$d -> fullName = $_POST['full_name'];
					$d -> title = $_POST['title'];
					$d -> content = $_POST['content'];
					
				}

			$s -> update($d);
		}
		
	}
?>