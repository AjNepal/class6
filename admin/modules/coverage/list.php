
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Manage Coverage</h3>
		<a class="btn btn-info" href="?action=add&page=coverage">Add</a>
	</div>
    <div class="box-body no-padding"> 
	<table class="table table-striped">
		<tr>
			<th>LocationName</th>
			<th>Lattitude</th>
			<th>Longitude</th>
			<th>InfoWindow_Text</th>
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
						echo $v['location_name'];
					?>
				
				</td>
				
				<td>
					<?php
					echo $v['lat'];
					?>
				</td>
				<td>
					<?php
					echo $v['lng'];
					?>
				</td>
				<td>
					<?php
					echo $v['infowindow_text'];
					?>
				</td>
				<td>
					<a class="btn btn-danger" href="?page=coverage&action=delete&id=<?php echo $v['id'];?>">Delete</a>
				     |
					<a class="btn btn-success" href="?page=coverage&action=update&id=<?php echo $v['id'];?>">Update</a>
				</td>
			
			</tr>
			
	     <?php		
		}
	
	
	
	
	?>






</table>
            
</div>
