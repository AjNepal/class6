<div class="box">
  <div class="box-header">
    <h3 class="box-title">Manage Students</h3>
    <a class="btn btn-primary" href="?action=add&page=students">Add</a>
  </div>
  <div class="box-body no-padding">
      <table class="table table-striped">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Actions</th>
        </tr>
      <?php
           foreach ($list as $k => $v) 
           {
              ?>
            
         <tr>
          <td><?php echo $v['name']; ?></td>
          <td><?php echo $v['email']; ?></td>
          <td><?php echo $v['phone']; ?></td>
          <td>
            <a class="btn btn-danger" href="?page=students&action=delete&id=<?php echo $v['id']; ?>">Delete</a>
            |
            <a class="btn btn-info" href="?page=students&action=update&id=<?php echo $v['id']; ?>">Edit</a></td>
         </tr>

        <?php  
           }
      ?>
    </table>
  </div>
</div>