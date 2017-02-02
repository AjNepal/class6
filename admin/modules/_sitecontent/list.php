
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Manage Site Content</h3>
		<a class="btn btn-info" href="?action=add&page=sitecontent">Add</a>
	</div>
    <div class="box-body no-padding"> 
	<table class="table table-striped">
		<tr>
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
					echo $v['title'];
					?>
				</td>
				<td>
				<img width="100" src="images/sitecontent/<?php echo $v['image'];?>" />

				</td>
				<td>
					<?php
					echo $v['content'];
					?>
				</td>
				<td>
					<a class="btn btn-danger" href="?page=sitecontent&action=delete&id=<?php echo $v['id'];?>">Delete</a>
				     |
					<a class="btn btn-success" href="?page=sitecontent&action=update&id=<?php echo $v['id'];?>">Update</a>
				</td>
			
			</tr>
			
	     <?php		
		}
	
	
	
	
	?>






</table>
            
</div>
