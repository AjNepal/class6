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
		<h3 class="box-title">ADD/UPDATE FORM</h3>
	</div>
	<form role="form" method="post" action="?page=boardmembers" enctype="multipart/form-data">
	<div class="box-body">
		<div class="form-group">
			<label>FullName:</label>
			<input class="form-control" type="text" name="full_name" value="<?php echo $f->fullName;?>"/>
		</div>
		<div class="form-group">
			<label>Title:</label>
			<input class="form-control" type="text" name="title" value="<?php echo $f->title;?>"/>
		</div>
		<div class="form-group" >
			<label>Image:</label>
			<input class="form-control" type="file" name="image" />
		</div>
		<div class="form-group">
			<label>Content:</label>
			<textarea id="mmm" name="content" rows="5" cols="100"><?php echo $f->content;?></textarea>
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
 <script>
  tinymce.init({
  selector: '#mmm',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
  </script>