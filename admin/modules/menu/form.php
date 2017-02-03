<?php
if(count($e)>0)
{?>
<div class="alert-warning">
  <ul>
  <?php
  foreach($e as $v)
  {
	 
	?>
<li> <?php echo  $v; ?> </li>
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
	<h3>MENU FORM</h3>
     </div>
	 
	 
	 <form class="form-group"enctype="multipart/form-data" method="post" action="?page=menu">
		<div class="box-body">
			<div class="form-group">
			 <label> Title:</label>
			 <input class="form-control"type="text" name="title" value="<?php echo $f->title; ?>"/>
			</div>
			<div class="form-group">
				     <label> Link:</label>
					 <input class="form-control"type="text" name="link" value="<?php echo $f->link; ?>"/>
			</div>
			<div class="form-group">
				     <label> Position:</label>
					<input class="form-control"type="text" name="position" value="<?php echo $f->position; ?>"/>
			</div>
			<div class="form-group">
				     <label> image:</label>
					 <input class="form-control"type="file" name="image" />
			</div>
		</div>
		
		<div class="box-footer">
					 <?php
				 if ($_REQUEST['action']=='add')
				 {
			?>
				<input type="hidden" name="action" value="add"/>
				<input class="btn btn-primary" type="submit" value="Add"/>
			<?php
				 }
				 else
				 {
			?>
			<input type="hidden" name="action" value="update"/>
			<input type="hidden" name="id" value="<?php echo $f->id; ?>"/>
			<input class="btn btn-success" type="submit" value="UPDATE"/>
				 <?php
				 }
				 ?>
		</div>
	 
 
	

	 
	 
	</form>
	 

</div>
