<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Category</h3>
    <a class="btn btn-primary" href="?action=add&page=category">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Title</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v['title']; ?></td>
          <td><?php echo $v['price']; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=category&action=delete&id=<?php echo $v['id']; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=category&action=update&id=<?php echo $v['id']; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>