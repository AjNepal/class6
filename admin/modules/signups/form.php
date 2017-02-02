<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">ADD/UPDATE FORM</h3>
	</div>
	<form role="form" method="post" action="?page=signups">
	<div class="box-body">
		<div class="form-group">
			<label>Email:</label>
			<input class="form-control" type="text" name="email" value="<?php echo $f[0]['email'];?>"/>
		</div>
		<div class="form-group">
			<label>Signup_date:</label>
			<input class="form-control" type="date_picker" name="signup_date" value="<?php echo $f[0]['signup_date'];?>"/>
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
