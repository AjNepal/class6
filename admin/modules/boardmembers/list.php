
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Manage BoardMembers</h3>
		<a class="btn btn-info" href="?action=add&page=boardmembers">Add</a>
	</div>
    <div class="box-body no-padding"> 
	<table class="table table-striped">
		<tr>
			<th>FullName</th>
			<th>Title</th>
			<th>Image</th>
			<th>Contents</th>
			<th>Actions</th>
		</tr>
	<?php
		foreach($list as $k=>$v)
		{
			
			//echo '<pre>';
			//print_r($v);
			//echo '</pre>';
			
	     ?>	
			<tr>
				<td>
					<?php 
						echo $v->fullName;
					?>
				
				</td>
				
				<td>
					<?php
					echo $v->title;
					?>
				</td>
				<td>
					
					<img width ='100'src="images/boardmembers/<?php echo $v->image;?>">
				
				</td>
				<td>
					<?php
					echo $v->content;
					?>
				</td>
				<td>
					<a class="btn btn-danger" href="?page=boardmembers&action=delete&id=<?php echo $v->id;?>">Delete</a>
				     |
					<a class="btn btn-success" href="?page=boardmembers&action=update&id=<?php echo $v->id;?>">Update</a>
				</td>
			
			</tr>
			
	     <?php		
		}
	
	
	
	
	?>






</table>
            
</div>
