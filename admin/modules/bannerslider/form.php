
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
	<h3>BANNER SLIDER FORM</h3>
     </div>
	 
	 
	 <form class="form-group" method="post" action="?page=bannerslider">
		<div class="box-body">
			<div class="form-group">
			 <label> Title:</label>
			 <input class="form-control"type="text" name="title" value="<?php echo $f->title; ?>"/>
			</div>
			<div class="form-group">
				     <label>Btn_Text:</label>
					 <input class="form-control"type="text" name="btn_text" value="<?php echo $f->btnText; ?>"/>
			</div>
			<div class="form-group">
				     <label>Btn_link:</label>
					<input class="form-control"type="text" name="btn_link" value="<?php echo $f->btnLink; ?>"/>
			</div>
			<div class="form-group">
				     <label>M_order:</label>
					 <input class="form-control"type="text" name="m_order" value="<?php echo $f->mOrder; ?>"/>
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
