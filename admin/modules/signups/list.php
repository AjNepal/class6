
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Manage Signups</h3>
		<a class="btn btn-info" href="?action=add&page=signups">Add</a>
	</div>
    <div class="box-body no-padding"> 
	<table class="table table-striped">
		<tr>
			<th>Email</th>
			<th>Signup_date</th>
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
						echo $v['email'];
					?>
				
				</td>
				
				<td>
					<?php
					echo $v['signup_date'];
					?>
				</td>
				<td>
					<a class="btn btn-danger" href="?page=signups&action=delete&id=<?php echo $v['id'];?>">Delete</a>
				     |
					<a class="btn btn-success" href="?page=signups&action=update&id=<?php echo $v['id'];?>">Update</a>
				</td>
			
			</tr>
			
	     <?php		
		}
	
	
	
	
	?>






</table>
            
</div>
