<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Board Members</h3>
    <a class="btn btn-primary" href="?action=add&page=boardmembers">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Full Name</th>
          <th>Title</th>
          <th>Image</th>
          <th>Content</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v['full_name']; ?></td>
          <td><?php echo $v['title']; ?></td>
          <td><?php echo $v['image']; ?></td>
          <td><?php echo $v['content']; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=boardmembers&action=delete&id=<?php echo $v['id']; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=boardmembers&action=update&id=<?php echo $v['id']; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>