<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">ADD/UPDATE FORM</h3>
	</div>
	<form role="form" method="post" action="?page=sitecontent" enctype="multipart/form-data">
	<div class="box-body">
		<div class="form-group">
			<label>Title:</label>
			<input class="form-control" type="text" name="title" value="<?php echo $f[0]['title'];?>"/>
		</div>
		<div class="form-group">
			<label>Image:</label>
			<input class="form-control" type="file" name="image" value="<?php echo $f[0]['image'];?>"/>
		</div>
		<div class="form-group">
			<label>Content:</label>
			<textarea name="content" rows="5" cols="100"> <?php echo $f[0]['content'];?></textarea>
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
					<input type="hidden" name="id" value="<?php echo $f[0]['id'];?>"/>
					<input class="btn btn-success" type="submit" value="Update"/>
					<?php
				}
				?>
	</div>		
	</form>	


</div>
