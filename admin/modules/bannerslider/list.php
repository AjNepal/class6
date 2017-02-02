<div class= "box">
    <div class= "box-header">
	   <h3 class="box-title">BANNER</h3>
	   <a class="btn btn-info" href="?action=add&page=bannerslider">Add</a>
	</div>
	<div class="box-body no-padding">
	</div>

<table class="table table-striped" >
 <tr>
     <th>TITLE</th>
     <th>BTN_TEXT</th>
	  <th>BTN_LINK</th>
	  <th>M_ORDER</th
 </tr>
     <?php
        foreach($list as $k=>$v)
        {
				
				//print_r($v);
				
		?>
		<tr>
		    <td>
			<?php 
			
			echo  $v->title;
			?>
			</td>
			
			<td>
			<?php 

			echo $v->btnText;
			?>
			</td>
			<td>
			<?php 

			echo $v->btnLink;
			?>
			</td>
			<td>
			<?php
			echo $v->mOrder;
			?>
			
			
			<td>
			<a class ="btn btn-danger" href="?page=bannerslider&action=delete&id=<?php echo $v->id;?>">DELETE</a>
			
			<a  class="btn btn-success"href="?page=bannerslider&action=update&id=<?php echo $v->id;?>">UPDATE</a>
			</td>
		
		</tr>
<?php	
	}
?>
	  
</table>
</div>





