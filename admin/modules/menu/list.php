<div class= "box">
    <div class= "box-header">
	   <h3 class="box-title">MENU</h3>
	   <a class="btn btn-info" href="?action=add&page=menu">Add</a>
	</div>
	<div class="box-body no-padding">
	</div>

<table class="table table-striped" >
 <tr>
     <th>TITLE</th>
     <th>LINK</th>
	  <th>POSITION</th>
	  <th>IMAGE</th
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

			echo $v->link;
			?>
			</td>
			<td>
			<?php 

			echo $v->position;
			?>
			</td>
			<td>
			
			<img width='100'src="images/menu/ <?php echo $v->image;?>">
			
			
			
			<td>
			<a class ="btn btn-danger" href="?page=menu&action=delete&id=<?php echo $v->id;?>">DELETE</a>
			
			<a  class="btn btn-success"href="?page=menu&action=update&id=<?php echo $v->id;?>">UPDATE</a>
			</td>
		
		</tr>
		
		
		
		 <?php	
			
			}
		?>
	  


</table>




</div>





