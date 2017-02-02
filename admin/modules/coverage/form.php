<?php
	if(count($e) > 0)
	{
	?>
		<div class="alert-warning">
		<ul>
		<?php
			foreach($e as $v)
			{
				?>
				<li><?php echo $v;?></li>
				
			<?php	
			}
			
		?>
		</ul>
		</div>
		<?php
	}
?>
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">ADD/UPDATE FORM</h3>
	</div>
	<form role="form" method="post" action="?page=coverage">
	<div class="box-body">
		<div class="form-group">
			<label>LocationName:</label>
			<input class="form-control" type="text" name="location_name" value="<?php echo $f->locationName;?>"/>
		</div>
		<div class="form-group">
			<label>Lattitude:</label>
			<input class="form-control" type="text" name="lat" value="<?php echo $f->lat;?>"/>
		</div>
		<div class="form-group">
			<label>Longitude:</label>
			<input class="form-control" type="text" name="lng" value="<?php echo $f->lng;?>"/>
		</div>
		<div class="form-group">
			<label>InfoWindow_Text:</label>
			<input class="form-control" type="text" name="infowindow_text" value="<?php echo $f->infowindowText;?>"/>
		</div>
	</div>
		
			
	<div class="box-footer">		
			
			<?php
				if($_REQUEST['action']=='add')
				{
					?>
					<input type="hidden" name="action" value="add"/>
					<input class="btn btn-success"type="submit" value="Add"/>
					<?php
				}
				else
				{
					?>
					<input type="hidden" name="action" value="update"/>
					<input type="hidden" name="id" value="<?php echo $f->id;?>"/>
					<input class="btn btn-success" type="submit" value="Update"/>
					<?php
				}
				?>
	</div>		
	</form>	


</div>
